<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Afficher la liste des médias
     */
    public function index()
    {
        // Vérification si le modèle existe
        if (!class_exists(Media::class)) {
            // Si le modèle n'existe pas, retourner une vue avec un message
            return view('medias.index', ['medias' => collect()]);
        }
        
        try {
            $medias = Media::with(['user', 'contenu', 'typemedia'])
                          ->orderBy('created_at', 'desc')
                          ->paginate(12);
            
            return view('medias.index', compact('medias'));
        } catch (\Exception $e) {
            // En cas d'erreur, retourner une collection vide
            return view('medias.index', ['medias' => collect()]);
        }
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        return view('medias.create');
    }

    /**
     * Enregistrer un nouveau média
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'fichier' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,avi,mov,mp3,wav,pdf,doc,docx|max:10240',
            'type' => 'required|string|in:image,video,audio,document',
            'description' => 'nullable|string',
        ]);

        // Gestion du fichier
        if ($request->hasFile('fichier')) {
            $file = $request->file('fichier');
            $path = $file->store('medias', 'public');
            
            $media = Media::create([
                'titre' => $request->titre,
                'chemin' => $path,
                'type' => $request->type,
                'taille' => $file->getSize(),
                'description' => $request->description,
                'user_id' => auth()->id(),
            ]);

            return redirect()->route('medias.index')
                ->with('success', 'Média téléversé avec succès.');
        }

        return back()->with('error', 'Erreur lors du téléversement.');
    }

    /**
     * Afficher un média spécifique
     */
    public function show($id)
    {
        $media = Media::with(['user', 'contenu', 'typemedia'])->findOrFail($id);
        return view('medias.show', compact('media'));
    }

    /**
     * Afficher le formulaire d'édition
     */
    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('medias.edit', compact('media'));
    }

    /**
     * Mettre à jour un média
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|string|in:image,video,audio,document',
        ]);

        $media = Media::findOrFail($id);
        
        // Mise à jour du fichier si fourni
        if ($request->hasFile('fichier')) {
            $request->validate([
                'fichier' => 'file|mimes:jpg,jpeg,png,gif,mp4,avi,mov,mp3,wav,pdf,doc,docx|max:10240',
            ]);
            
            // Supprimer l'ancien fichier
            Storage::disk('public')->delete($media->chemin);
            
            $file = $request->file('fichier');
            $path = $file->store('medias', 'public');
            
            $media->chemin = $path;
            $media->taille = $file->getSize();
        }

        $media->titre = $request->titre;
        $media->description = $request->description;
        $media->type = $request->type;
        $media->save();

        return redirect()->route('medias.index')
            ->with('success', 'Média mis à jour avec succès.');
    }

    /**
     * Supprimer un média
     */
    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        
        // Supprimer le fichier
        Storage::disk('public')->delete($media->chemin);
        
        $media->delete();

        return redirect()->route('medias.index')
            ->with('success', 'Média supprimé avec succès.');
    }

    /**
     * Afficher la vue web (si différente de l'API)
     */
    public function indexWeb()
    {
        // Vous pouvez adapter cette méthode si nécessaire
        return $this->index();
    }
}