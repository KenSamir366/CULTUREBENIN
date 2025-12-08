<?php

namespace App\Http\Controllers;

use App\Models\Typemedia;
use Illuminate\Http\Request;

class TypemediaController extends Controller
{
    // Afficher tous les types de média (Vue Web)
    public function index()
    {
        $types = Typemedia::withCount('medias')
            ->orderBy('nom')
            ->get();
        
        return view('typemedias.index', compact('types'));
    }

    // Afficher un type de média (API)
    public function show($id)
    {
        $typemedia = Typemedia::find($id);

        if (!$typemedia) {
            return response()->json(['message' => 'Type de média introuvable'], 404);
        }

        return response()->json($typemedia, 200);
    }

    // Créer un type de média (API)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'extensions' => 'nullable|string'
        ]);

        $typemedia = Typemedia::create($validated);

        return response()->json($typemedia, 201);
    }

    // Modifier un type de média (API)
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

    // Supprimer un type de média (API)
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