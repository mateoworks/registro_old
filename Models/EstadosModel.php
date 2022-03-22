<?php 
use Illuminate\Database\Eloquent\Model;
	class EstadosModel extends Model
	{
		protected $table = 'estados';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			
    	);
	}
 ?>