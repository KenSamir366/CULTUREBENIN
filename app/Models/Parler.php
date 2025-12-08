<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parler extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'langue_id'
    ];

    /**
     * Relation avec la région
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    /**
     * Relation avec la langue
     */
    public function langue()
    {
        return $this->belongsTo(Langue::class);
    }
}