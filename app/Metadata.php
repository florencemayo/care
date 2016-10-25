<?php  namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Metadata extends Model
{
	protected $table = 'metadata';

	protected $guarded = ['id'];

	protected $fillable = ['name'];

	$user = User::find(1);

	public function metadata_category(){
		return $this->HasMany('Metadata_Category');
	}

	public function user(){
		$this->belongsTo(User::class);
	}

}