<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    // Afficher tous les commentaires (Vue Web)
    public function index()
    {
        $commentaires = Commentaire::with(['user', 'contenu'])
            ->orderBy('date_commentaires', 'desc')
            ->paginate(15);
        
        // Calcul des statistiques
        $stats = [
            'total' => Commentaire::count(),
            'average_note' => Commentaire::avg('note') ?? 0,
            'unique_users' => Commentaire::distinct('user_id')->count('user_id'),
            'contents_commented' => Commentaire::distinct('contenu_id')->count('contenu_id'),
            'today_comments' => Commentaire::whereDate('date_commentaires', today())->count(),
        ];
        
        return view('commentaires.index', compact('commentaires', 'stats'));
    }

    // Afficher un commentaire
    public function show($id)
    {
        $commentaire = Commentaire::with(['user', 'contenu'])->find($id);

        if (!$commentaire) {
            return response()->json(['message' => 'Commentaire introuvable'], 404);
        }

        return response()->json($commentaire, 200);
    }

    // Créer un commentaire
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'contenu_id' => 'required|exists:contenus,id',
            'texte' => 'required|string',
            'note' => 'required|integer|min:1|max:5',
            'date_commentaires' => 'required|date'
        ]);

        $commentaire = Commentaire::create($validated);

        return response()->json($commentaire, 201);
    }

    // Modifier un commentaire
    public function update(Request $request, $id)
    {
        $commentaire = Commentaire::find($id);

        if (!$commentaire) {
            return response()->json(['message' => 'Commentaire introuvable'], 404);
        }

        $validated = $request->validate([
            'texte' => 'sometimes|string',
            'note' => 'sometimes|integer|min:1|max:5',
            'date_commentaires' => 'sometimes|date'
        ]);

        $commentaire->update($validated);

        return response()->json($commentaire, 200);
    }

    // Supprimer un commentaire
    public function destroy($id)
    {
        $commentaire = Commentaire::find($id);

        if (!$commentaire) {
            return response()->json(['message' => 'Commentaire introuvable'], 404);
        }

        $commentaire->delete();

        return response()->json(['message' => 'Commentaire supprimé'], 200);
    }
}