<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Typecontenu
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $nom
 * 
 * @property Collection|Contenu[] $contenus
 *
 * @package App\Models
 */
class Typecontenu extends Model
{
	protected $table = 'typecontenus';

	protected $fillable = [
		'nom'
	];

	public function contenus()
	{
		return $this->hasMany(Contenu::class);
	}
}
