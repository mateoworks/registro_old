<?php 
use Illuminate\Database\Eloquent\Model;
	class FrentesModel extends Model
	{
		protected $table = 'frentes';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			'nombre_frente',
			'descripcion',
    	);
	}
 ?>