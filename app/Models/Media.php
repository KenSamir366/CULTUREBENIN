<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    
    protected $fillable = [
        'titre',
        'chemin',
        'type',
        'taille',
        'description',
        'user_id',
        'contenu_id',
        'typemedia_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contenu()
    {
        return $this->belongsTo(Contenu::class);
    }

    public function typemedia()
    {
        // CORRECTION ICI : Typemedia::class (avec 'm' minuscule)
        return $this->belongsTo(Typemedia::class);
    }
}