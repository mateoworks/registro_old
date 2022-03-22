<?php 
require_once("Models/OrganismosModel.php");
use Illuminate\Database\Eloquent\Model;
	class OrgIntModel extends Model
	{
		protected $table = 'org_int';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			'clave_integrante',
			'clave_organismo',
			'fecha_registro'
    	);

		public function org(){
            return $this->belongsTo(OrganismosModel::class, "clave_organismo", "clave_organismo");
        }
	}
 ?>