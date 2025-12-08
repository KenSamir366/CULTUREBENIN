<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commentaire
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $user_id
 * @property int $contenu_id
 * @property string $texte
 * @property int $note
 * @property Carbon $date_commentaires
 * 
 * @property Contenu $contenu
 * @property User $user
 *
 * @package App\Models
 */
class Commentaire extends Model
{
	protected $table = 'commentaires';

	protected $casts = [
		'user_id' => 'int',
		'contenu_id' => 'int',
		'note' => 'int',
		'date_commentaires' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'contenu_id',
		'texte',
		'note',
		'date_commentaires'
	];

	public function contenu()
	{
		return $this->belongsTo(Contenu::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
