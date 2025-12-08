<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contenu;
use App\Models\Media;
use App\Models\Langue;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Récupère les vraies statistiques
        $stats = [
            'total_users' => User::count(),
            'total_admins' => User::where('role_id', 1)->count(),
            'total_actifs' => User::where('statut', 'actif')->count(),
            'nouveaux_users' => User::where('created_at', '>=', now()->subDays(7))->count(),
            'total_contenus' => Contenu::count(),
            'total_medias' => Media::count(),
            'total_langues' => Langue::count(),
            'total_commentaires' => \App\Models\Commentaire::count(),
            'total_signalements' => 12, // À remplacer par ton modèle
        ];
        
        // Retourne TON dashboard AdminLTE
        return view('index', compact('stats'));
    }
}