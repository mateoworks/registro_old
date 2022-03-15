<?php 
use Illuminate\Database\Eloquent\Model;
	class OrganismosModel extends Model
	{
		protected $table = 'organismos';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			
    	);
	}
 ?>