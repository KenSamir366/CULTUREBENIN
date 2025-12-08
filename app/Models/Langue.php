<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_langues',
        'code_langues',
        'description',
        'statut'
    ];

    // SUPPRIMEZ TOUTES LES RELATIONS SAUF CELUI-CI (si vous avez la colonne langue_id dans contenus)
    public function contenus()
    {
        return $this->hasMany(Contenu::class, 'langue_id');
    }

    // SUPPRIMEZ CES RELATIONS POUR L'INSTANT
    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'parlers', 'langue_id', 'user_id')
    //                 ->withTimestamps();
    // }
    // 
    // public function parlers()
    // {
    //     return $this->hasMany(Parler::class, 'langue_id');
    // }
    // 
    // public function regions()
    // {
    //     return $this->hasMany(Region::class, 'langue_id');
    // }

    // SUPPRIMEZ CES ACCESSORS
    // public function getUsersCountAttribute()
    // {
    //     return $this->users()->count();
    // }
    // 
    // public function getContenusCountAttribute()
    // {
    //     return $this->contenus()->count();
    // }
}