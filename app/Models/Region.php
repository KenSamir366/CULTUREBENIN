<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_regions',
        'localisation',
        'description',
        'population',
        'superficie',
        'drapeau',
        'code_region',
        'chef_lieu'
    ];

    /**
     * Les langues parlées dans cette région
     */
    public function langues()
    {
        return $this->belongsToMany(Langue::class, 'parlers', 'region_id', 'langue_id')
                    ->withTimestamps()
                    ->withPivot(['id', 'created_at', 'updated_at']);
    }

    /**
     * Les entrées dans la table parler
     */
    public function parler()
    {
        return $this->hasMany(Parler::class);
    }
}