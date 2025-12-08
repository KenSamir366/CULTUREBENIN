<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $fillable = ['nom_roles', 'description'];
    
    // Relation one-to-many avec les utilisateurs
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
    
    // SUPPRIMER la relation permissions() car tu n'as pas de modèle Permission
}