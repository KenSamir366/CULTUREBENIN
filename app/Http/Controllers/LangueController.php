<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use App\Models\Contenu;
use Illuminate\Http\Request;

class LangueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Version SIMPLE sans relations problématiques
        $langues = Langue::orderBy('nom_langues')->get();
        
        // Calcul manuel des counts
        foreach ($langues as $langue) {
            // Nombre de contenus pour cette langue
            $langue->contenus_count = Contenu::where('langue_id', $langue->id)->count();
            
            // Nombre d'utilisateurs (si vous avez une colonne langue_id dans users)
            // $langue->users_count = \App\Models\User::where('langue_id', $langue->id)->count();
            $langue->users_count = 0; // Valeur par défaut pour l'instant
        }
        
        return view('langues.index', compact('langues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('langues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_langues' => 'required|string|max:100',
            'code_langues' => 'required|string|max:10|unique:langues',
            'description' => 'nullable|string',
            'statut' => 'nullable|string|in:actif,inactif'
        ]);

        Langue::create([
            'nom_langues' => $request->nom_langues,
            'code_langues' => $request->code_langues,
            'description' => $request->description,
            'statut' => $request->statut ?? 'actif'
        ]);

        return redirect()->route('langues.index')
            ->with('success', 'Langue créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $langue = Langue::findOrFail($id);
        
        // Charger les contenus pour cette langue
        $contenus = Contenu::where('langue_id', $id)->get();
        
        return view('langues.show', compact('langue', 'contenus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $langue = Langue::findOrFail($id);
        return view('langues.edit', compact('langue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_langues' => 'required|string|max:100',
            'code_langues' => 'required|string|max:10|unique:langues,code_langues,' . $id,
            'description' => 'nullable|string',
            'statut' => 'nullable|string|in:actif,inactif'
        ]);

        $langue = Langue::findOrFail($id);
        $langue->update([
            'nom_langues' => $request->nom_langues,
            'code_langues' => $request->code_langues,
            'description' => $request->description,
            'statut' => $request->statut ?? $langue->statut
        ]);

        return redirect()->route('langues.index')
            ->with('success', 'Langue mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $langue = Langue::findOrFail($id);
        $langue->delete();

        return redirect()->route('langues.index')
            ->with('success', 'Langue supprimée avec succès.');
    }
}