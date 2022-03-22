<?php
require_once("Models/Org_Int.php"); 
use Illuminate\Database\Eloquent\Model;

	class OrganismosModel extends Model
	{
		protected $table = 'organismos';
        public $timestamps = false;
		protected $primaryKey = "clave_organismo";

    	protected $fillable = array(
			'id',
			"nombre_organismo"
			
    	);
		public function integrantes(){
			return $this->hasMany(OrgIntModel::class, "clave_organismo", "clave_organismo");
		}
	}
 ?>