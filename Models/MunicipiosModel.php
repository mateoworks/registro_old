<?php 
use Illuminate\Database\Eloquent\Model;
	class MunicipiosModel extends Model
	{
		protected $table = 'municipios';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			
    	);
	}
 ?>