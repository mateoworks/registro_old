<?php 
use Illuminate\Database\Eloquent\Model;
	class CentrosModel extends Model
	{
		protected $table = 'centros';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			
    	);
	}
 ?>