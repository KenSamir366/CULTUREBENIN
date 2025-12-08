<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'statut'
    ];
    
    // Relation one-to-many inversée (un utilisateur a UN rôle)
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    
    // SUPPRIMER la méthode roles() (pas de many-to-many)
}