<?php

namespace App\Http\Controllers;

use App\Models\Typecontenu;
use Illuminate\Http\Request;

class TypecontenuController extends Controller
{
    // Afficher tous les types de contenu (API)
    public function index()
    {
        return response()->json(Typecontenu::all(), 200);
    }

    // Afficher tous les types de contenu (Vue Web)
    public function indexWeb()
    {
        $typecontenus = Typecontenu::withCount('contenus')
            ->orderBy('nom')
            ->get();
        
        return view('typecontenus.index', compact('typecontenus'));
    }

    // Afficher un type de contenu
    public function show($id)
    {
        $typecontenu = Typecontenu::find($id);

        if (!$typecontenu) {
            return response()->json(['message' => 'Type de contenu introuvable'], 404);
        }

        return response()->json($typecontenu, 200);
    }

    // Créer un type de contenu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255'
        ]);

        $typecontenu = Typecontenu::create($validated);

        return response()->json($typecontenu, 201);
    }

    // Modifier un type de contenu
    public function update(Request $request, $id)
    {
        $typecontenu = Typecontenu::find($id);

        if (!$typecontenu) {
            return response()->json(['message' => 'Type de contenu introuvable'], 404);
        }

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255'
        ]);

        $typecontenu->update($validated);

        return response()->json($typecontenu, 200);
    }

    // Supprimer un type de contenu
    public function destroy($id)
    {
        $typecontenu = Typecontenu::find($id);

        if (!$typecontenu) {
            return response()->json(['message' => 'Type de contenu introuvable'], 404);
        }

        $typecontenu->delete();

        return response()->json(['message' => 'Type de contenu supprimé'], 200);
    }
}