<?php

namespace App\Http\Controllers;

use App\Models\Parler;
use App\Models\Region;
use App\Models\Langue;
use Illuminate\Http\Request;

class ParlerController extends Controller
{
    /**
     * Afficher tous les parlers
     */
    public function index()
    {
        $parlers = Parler::with(['region', 'langue'])->get();
        
        // Calculer les statistiques
        $stats = [
            'total_parlers' => $parlers->count(),
            'regions_count' => $parlers->pluck('region_id')->unique()->count(),
            'langues_count' => $parlers->pluck('langue_id')->unique()->count(),
        ];
        
        return view('parlers.index', compact('parlers', 'stats'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('parlers.create', compact('regions', 'langues'));
    }

    /**
     * Enregistrer un nouveau parler
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'region_id' => 'required|exists:regions,id',
            'langue_id' => 'required|exists:langues,id',
        ]);

        // Vérifier si cette combinaison existe déjà
        $exists = Parler::where('region_id', $validated['region_id'])
                       ->where('langue_id', $validated['langue_id'])
                       ->exists();

        if ($exists) {
            return back()->withErrors(['langue_id' => 'Cette combinaison région-langue existe déjà.']);
        }

        Parler::create($validated);

        return redirect()->route('parlers.index')
                         ->with('success', 'Parler ajouté avec succès.');
    }

    /**
     * Afficher un parler spécifique
     */
    public function show($id)
    {
        $parler = Parler::with(['region', 'langue'])->findOrFail($id);
        
        return view('parlers.show', compact('parler'));
    }

    /**
     * Afficher le formulaire d'édition
     */
    public function edit($id)
    {
        $parler = Parler::findOrFail($id);
        $regions = Region::all();
        $langues = Langue::all();
        
        return view('parlers.edit', compact('parler', 'regions', 'langues'));
    }

    /**
     * Mettre à jour un parler
     */
    public function update(Request $request, $id)
    {
        $parler = Parler::findOrFail($id);
        
        $validated = $request->validate([
            'region_id' => 'required|exists:regions,id',
            'langue_id' => 'required|exists:langues,id',
        ]);

        // Vérifier si cette combinaison existe déjà (sauf pour cet enregistrement)
        $exists = Parler::where('region_id', $validated['region_id'])
                       ->where('langue_id', $validated['langue_id'])
                       ->where('id', '!=', $id)
                       ->exists();

        if ($exists) {
            return back()->withErrors(['langue_id' => 'Cette combinaison région-langue existe déjà.']);
        }

        $parler->update($validated);

        return redirect()->route('parlers.index')
                         ->with('success', 'Parler mis à jour avec succès.');
    }

    /**
     * Supprimer un parler
     */
    public function destroy($id)
    {
        $parler = Parler::findOrFail($id);
        $parler->delete();

        return redirect()->route('parlers.index')
                         ->with('success', 'Parler supprimé avec succès.');
    }

    // ========== VERSION API (JSON) ==========

    /**
     * API: Afficher tous les parlers
     */
    public function apiIndex()
    {
        $parlers = Parler::with(['region', 'langue'])->get();
        return response()->json($parlers, 200);
    }

    /**
     * API: Afficher un parler
     */
    public function apiShow($id)
    {
        $parler = Parler::with(['region', 'langue'])->find($id);
        
        if (!$parler) {
            return response()->json(['message' => 'Parler introuvable'], 404);
        }
        
        return response()->json($parler, 200);
    }

    /**
     * API: Créer un parler
     */
    public function apiStore(Request $request)
    {
        $validated = $request->validate([
            'region_id' => 'required|exists:regions,id',
            'langue_id' => 'required|exists:langues,id',
        ]);

        $parler = Parler::create($validated);
        
        return response()->json($parler, 201);
    }

    /**
     * API: Modifier un parler
     */
    public function apiUpdate(Request $request, $id)
    {
        $parler = Parler::find($id);
        
        if (!$parler) {
            return response()->json(['message' => 'Parler introuvable'], 404);
        }
        
        $validated = $request->validate([
            'region_id' => 'sometimes|exists:regions,id',
            'langue_id' => 'sometimes|exists:langues,id',
        ]);

        $parler->update($validated);
        
        return response()->json($parler, 200);
    }

    /**
     * API: Supprimer un parler
     */
    public function apiDestroy($id)
    {
        $parler = Parler::find($id);
        
        if (!$parler) {
            return response()->json(['message' => 'Parler introuvable'], 404);
        }
        
        $parler->delete();
        
        return response()->json(['message' => 'Parler supprimé'], 200);
    }
}