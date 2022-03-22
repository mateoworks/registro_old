<?php 

use Illuminate\Database\Eloquent\Model;
	class NivelModel extends Model
	{
		protected $table = 'nivel';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
    	);

		
	}
 ?>