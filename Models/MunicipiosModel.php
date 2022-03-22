<?php 
require_once("Models/IntegrantesModel.php");
require_once("Models/NivelModel.php");
require_once("Models/SeccionalesModel.php");
use Illuminate\Database\Eloquent\Model;
	class MunicipiosModel extends Model
	{
		protected $table = 'municipios_antorchistas';
        public $timestamps = false;

    	protected $fillable = array(
			'id',
			"seccional_id",
			"responsable_id",
			"fecha_fundacion",
			"municipio",
			"poblacion_total",
			"poblacion_mayor_18"
    	);

		public function integrante(){
			return $this->belongsTo(IntegrantesModel::class, "responsable_id", "clave_int");
		}
		public function nivel(){
			return $this->belongsTo(NivelModel::class, "nivel_id");
		}
		public function seccional(){
			return $this->belongsTo(SeccionalesModel::class, "seccional_id");
		}
	}
 ?>