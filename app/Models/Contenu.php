<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contenu
 * 
 * @property int $id
 * @property string $titre
 * @property int $typecontenu_id
 * @property string $texte
 * @property Carbon $date_creation
 * @property string $statut
 * @property int $auteur_id
 * @property int $parent_id
 * @property int $region_id
 * @property int $langue_id
 * @property int $moderateur_id
 * @property Carbon|null $date_validation
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Langue $langue
 * @property Contenu $contenu
 * @property Region $region
 * @property Typecontenu $typecontenu
 * @property Collection|Commentaire[] $commentaires
 * @property Collection|Contenu[] $contenus
 * @property Collection|Media[] $media
 *
 * @package App\Models
 */
class Contenu extends Model
{
    protected $table = 'contenus';

    protected $casts = [
        'typecontenu_id' => 'int',
        'date_creation' => 'datetime',
        'auteur_id' => 'int',
        'parent_id' => 'int',
        'region_id' => 'int',
        'langue_id' => 'int',
        'moderateur_id' => 'int',
        'date_validation' => 'datetime'
    ];

    protected $fillable = [
        'titre',
        'typecontenu_id',
        'texte',
        'date_creation',
        'statut',
        'auteur_id',
        'parent_id',
        'region_id',
        'langue_id',
        'moderateur_id',
        'date_validation'
    ];

    // Relation avec le modérateur
    public function user()
    {
        return $this->belongsTo(User::class, 'moderateur_id');
    }

    // ✅ RELATION AVEC L'AUTEUR
    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }

    public function langue()
    {
        return $this->belongsTo(Langue::class);
    }

    public function contenu()
    {
        return $this->belongsTo(Contenu::class, 'parent_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function typecontenu()
    {
        return $this->belongsTo(Typecontenu::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class, 'parent_id');
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}