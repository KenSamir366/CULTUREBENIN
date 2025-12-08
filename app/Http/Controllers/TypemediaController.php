<?php

namespace App\Http\Controllers;

use App\Models\Typemedia;
use Illuminate\Http\Request;

class TypemediaController extends Controller
{
    // Afficher tous les types de média (VUE WEB)
    public function index()
    {
        $types = Typemedia::withCount('medias')
            ->orderBy('nom')
            ->get();  // ← get() retourne une collection
        
        return view('typemedias.index', compact('types'));
    }

    // Afficher tous les types de média (API JSON)
    public function indexApi()
    {
        $types = Typemedia::all();  // ← all() retourne une collection qu'on convertit en JSON
        
        return response()->json($types, 200);
    }

    // Afficher un type de média
    public function show($id)
    {
        $typemedia = Typemedia::find($id);

        if (!$typemedia) {
            return response()->json(['message' => 'Type de média introuvable'], 404);
        }

        return response()->json($typemedia, 200);
    }

    // Créer un type de média
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'extensions' => 'nullable|string'
        ]);

        $typemedia = Typemedia::create($validated);

        return response()->json($typemedia, 201);
    }

    // Modifier un type de média
    public function update(Request $request, $id)
    {
        $typemedia = Typemedia::find($id);

        if (!$typemedia) {
            return response()->json(['message' => 'Type de média introuvable'], 404);
        }

        $validated = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'extensions' => 'nullable|string'
        ]);

        $typemedia->update($validated);

        return response()->json($typemedia, 200);
    }

    // Supprimer un type de média
    public function destroy($id)
    {
        $typemedia = Typemedia::find($id);

        if (!$typemedia) {
            return response()->json(['message' => 'Type de média introuvable'], 404);
        }

        $typemedia->delete();

        return response()->json(['message' => 'Type de média supprimé'], 200);
    }
}