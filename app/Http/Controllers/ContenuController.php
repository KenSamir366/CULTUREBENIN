<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use App\Models\Typecontenu;
use App\Models\User;
use App\Models\Region;
use App\Models\Langue;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    // ==================== MÉTHODES WEB ====================
    
    /**
     * Afficher la liste des contenus pour l'interface web
     */
    public function index()
    {
        $contenus = Contenu::with(['typecontenu', 'auteur', 'region', 'langue'])
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);
        
        return view('contenus.index', compact('contenus'));
    }

    /**
     * Afficher un contenu spécifique pour l'interface web
     */
    public function show($id)
    {
        $contenu = Contenu::with(['typecontenu', 'auteur', 'region', 'langue', 'medias'])
                         ->find($id);
        
        if (!$contenu) {
            return redirect()->route('contenus.index')
                           ->with('error', 'Contenu introuvable');
        }
        
        return view('contenus.show', compact('contenu'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        $typesContenu = Typecontenu::all();
        $users = User::all();
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('contenus.create', compact('typesContenu', 'users', 'regions', 'langues'));
    }

    /**
     * Stocker un nouveau contenu (WEB)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'texte' => 'required|string',
            'typecontenu_id' => 'required|exists:typecontenus,id',
            'statut' => 'required|in:publié,brouillon,en_attente,archivé',
            'auteur_id' => 'required|exists:users,id',
            'region_id' => 'required|exists:regions,id',
            'langue_id' => 'required|exists:langues,id',
            'date_creation' => 'required|date'
        ]);
        
        Contenu::create($validated);
        
        return redirect()->route('contenus.index')
                       ->with('success', 'Contenu créé avec succès');
    }

    /**
     * Afficher le formulaire d'édition
     */
    public function edit($id)
    {
        $contenu = Contenu::with(['typecontenu', 'auteur', 'region', 'langue'])->find($id);
        
        if (!$contenu) {
            return redirect()->route('contenus.index')
                           ->with('error', 'Contenu introuvable');
        }

        $typesContenu = Typecontenu::all();
        $users = User::all();
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('contenus.edit', compact('contenu', 'typesContenu', 'users', 'regions', 'langues'));
    }

    /**
     * Mettre à jour un contenu (WEB)
     */
    public function update(Request $request, $id)
    {
        $contenu = Contenu::find($id);
        
        if (!$contenu) {
            return redirect()->route('contenus.index')
                           ->with('error', 'Contenu introuvable');
        }
        
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'texte' => 'required|string',
            'typecontenu_id' => 'required|exists:typecontenus,id',
            'statut' => 'required|in:publié,brouillon,en_attente,archivé',
            'auteur_id' => 'required|exists:users,id',
            'region_id' => 'required|exists:regions,id',
            'langue_id' => 'required|exists:langues,id',
            'date_creation' => 'required|date'
        ]);
        
        $contenu->update($validated);
        
        return redirect()->route('contenus.index')
                       ->with('success', 'Contenu mis à jour avec succès');
    }

    /**
     * Supprimer un contenu (WEB)
     */
    public function destroy($id)
    {
        $contenu = Contenu::find($id);
        
        if (!$contenu) {
            return redirect()->route('contenus.index')
                           ->with('error', 'Contenu introuvable');
        }
        
        $contenu->delete();
        
        return redirect()->route('contenus.index')
                       ->with('success', 'Contenu supprimé avec succès');
    }

    // ==================== MÉTHODES API ====================
    
    /**
     * API - Lister tous les contenus
     */
    public function indexApi()
    {
        return response()->json(Contenu::all(), 200);
    }

    /**
     * API - Afficher un contenu
     */
    public function showApi($id)
    {
        $contenu = Contenu::find($id);

        if (!$contenu) {
            return response()->json(['message' => 'Contenu introuvable'], 404);
        }

        return response()->json($contenu, 200);
    }

    /**
     * API - Créer un contenu
     */
    public function storeApi(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string',
            'typecontenu_id' => 'required|integer',
            'texte' => 'required|string',
            'date_creation' => 'required|date',
            'statut' => 'required|string',
            'auteur_id' => 'required|integer',
            'parent_id' => 'nullable|integer',
            'region_id' => 'required|integer',
            'langue_id' => 'required|integer',
            'moderateur_id' => 'nullable|integer',
            'date_validation' => 'nullable|date'
        ]);

        $contenu = Contenu::create($validated);
        return response()->json($contenu, 201);
    }

    /**
     * API - Mettre à jour un contenu
     */
    public function updateApi(Request $request, $id)
    {
        $contenu = Contenu::find($id);

        if (!$contenu) {
            return response()->json(['message' => 'Contenu introuvable'], 404);
        }

        $validated = $request->validate([
            'titre' => 'sometimes|string',
            'typecontenu_id' => 'sometimes|integer',
            'texte' => 'sometimes|string',
            'date_creation' => 'sometimes|date',
            'statut' => 'sometimes|string',
            'auteur_id' => 'sometimes|integer',
            'parent_id' => 'nullable|integer',
            'region_id' => 'sometimes|integer',
            'langue_id' => 'sometimes|integer',
            'moderateur_id' => 'nullable|integer',
            'date_validation' => 'nullable|date'
        ]);

        $contenu->update($validated);
        return response()->json($contenu, 200);
    }

    /**
     * API - Supprimer un contenu
     */
    public function destroyApi($id)
    {
        $contenu = Contenu::find($id);

        if (!$contenu) {
            return response()->json(['message' => 'Contenu introuvable'], 404);
        }

        $contenu->delete();
        return response()->json(['message' => 'Contenu supprimé'], 200);
    }
}