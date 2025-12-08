<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Typemedia extends Model
{
    protected $table = 'typemedias';
    
    protected $fillable = [
        'nom',
        'extensions',
        'description'
    ];

    public function medias()
    {
        return $this->hasMany(Media::class);
    }
}