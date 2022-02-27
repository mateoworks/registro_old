<?php 
use Illuminate\Database\Eloquent\Model;
	class SeccionalesModel extends Model
	{
		protected $table = 'persona';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			'estado_id',
			'fecha_fundacion',
            "dirigente_id",
            "nombre_seccional",
            "regional",
            "distritos_electorales",
            "revisado",
            "rev_obs"
    	);
	}
 ?>