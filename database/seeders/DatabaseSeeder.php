<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Langue;
use App\Models\Region;
use App\Models\Typecontenu;
use App\Models\Typemedia;
use App\Models\User;
use App\Models\Contenu;
use App\Models\Media;
use App\Models\Commentaire;
use App\Models\Parler;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ---------------- ROLES ----------------
        $roles = [
            'Admin',
            'Moderateur',
            'Utilisateur'
        ];
        foreach ($roles as $role) {
            Role::create(['nom_roles' => $role]);
        }

        // ---------------- LANGUES ----------------
        $langues = [
            ['nom_langues' => 'Français', 'code_langues' => 'FR', 'description' => 'Langue française'],
            ['nom_langues' => 'Anglais', 'code_langues' => 'EN', 'description' => 'Langue anglaise'],
        ];
        foreach ($langues as $l) {
            Langue::create($l);
        }

        // ---------------- REGIONS ----------------
        $regions = [
            ['nom_regions' => 'Atlantique', 'localisation' => 'Sud', 'description' => 'Région sud', 'population' => 1000000, 'superficie' => 5000],
            ['nom_regions' => 'Ouémé', 'localisation' => 'Sud-Est', 'description' => 'Région Est', 'population' => 800000, 'superficie' => 4000],
        ];
        foreach ($regions as $r) {
            Region::create($r);
        }

        // ---------------- TYPECONTENUS ----------------
        $typecontenus = ['Article', 'Vidéo'];
        foreach ($typecontenus as $tc) {
            Typecontenu::create(['nom' => $tc]);
        }

        // ---------------- TYPEMEDIAS ----------------
        $typemedias = ['Image', 'Vidéo'];
        foreach ($typemedias as $tm) {
            Typemedia::create(['nom' => $tm]);
        }

        // ---------------- USERS ----------------
        $users = [
            [
                'nom' => 'Doe', 'prenom' => 'John', 'email' => 'admin@example.com',
                'email_verified_at' => Carbon::now(), 'password' => bcrypt('password'),
                'role_id' => 1, 'sexe' => 'M', 'langue_id' => 1,
                'date_inscription' => Carbon::now(), 'date_naissance' => Carbon::now()->subYears(30),
                'statut' => 'actif'
            ],
            [
                'nom' => 'Smith', 'prenom' => 'Jane', 'email' => 'user@example.com',
                'email_verified_at' => Carbon::now(), 'password' => bcrypt('password'),
                'role_id' => 3, 'sexe' => 'F', 'langue_id' => 2,
                'date_inscription' => Carbon::now(), 'date_naissance' => Carbon::now()->subYears(25),
                'statut' => 'actif'
            ]
        ];
        foreach ($users as $u) {
            User::create($u);
        }

        // ---------------- CONTENUS ----------------
        Contenu::create([
            'titre' => 'Premier Article',
            'typecontenu_id' => 1,
            'texte' => 'Ceci est un article de test.',
            'date_creation' => Carbon::now(),
            'statut' => 'publie',
            'auteur_id' => 1,
            'parent_id' => null,
            'region_id' => 1,
            'langue_id' => 1,
            'moderateur_id' => 1,
            'date_validation' => Carbon::now()
        ]);

        // ---------------- MEDIAS ----------------
        Media::create([
            'contenu_id' => 1,
            'typemedias_id' => 1,
            'chemin' => 'images/test.jpg',
            'description' => 'Image test',
            'titre' => 'Image test', // ← AJOUT
            'user_id' => 1 // ← AJOUT
        ]);

        // ---------------- COMMENTAIRES ----------------
        Commentaire::create([
            'user_id' => 2,
            'contenu_id' => 1,
            'texte' => 'Super article !',
            'note' => 5,
            'date_commentaires' => Carbon::now()
        ]);

        // ---------------- PARLERS ----------------
        Parler::create([
            'region_id' => 1,
            'langue_id' => 1
        ]);
    }
}

