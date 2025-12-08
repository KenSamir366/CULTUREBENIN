<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    // ========== VERSION WEB (HTML) ==========
    
    // Afficher toutes les régions (vue HTML)
    public function index()
    {
        $regions = Region::all();
        
        // Transforme les données pour la vue
        $regions->transform(function ($region) {
            return (object) [
                'id' => $region->id,
                'nom_region' => $region->nom_regions,
                'code_region' => $region->code_region ?? substr($region->nom_regions, 0, 3),
                'chef_lieu' => $region->chef_lieu ?? $region->localisation ?? 'Non spécifié',
                'description' => $region->description,
                'population' => $region->population ?? 0,
                'superficie' => $region->superficie ?? 0,
                'drapeau' => $region->drapeau ?? null,
                'departements_count' => 0,
                'communes_count' => 0,
            ];
        });
        
        return view('regions.index', compact('regions'));
    }
    
    // ... Le reste du contrôleur SANS le code HTML à la fin
}
// FIN DU FICHIER - PAS DE HTML APRÈS