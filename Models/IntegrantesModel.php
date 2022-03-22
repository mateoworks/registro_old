<?php 
require_once("Models/NivelModel.php");
require_once("Models/EstadosModel.php");
require_once("Models/FrentesModel.php");
require_once("Models/Org_Int.php");
use Illuminate\Database\Eloquent\Model;
	class IntegrantesModel extends Model
	{
		protected $table = 'integrantes';
        public $timestamps = false;
        protected $primaryKey = "clave_int";

    	protected $fillable = array(
			'clave_int',
			'estado_alta_id',
            'estado_nacimiento_id',
            'frente_origen_id',
            'frente_destino_id',
            'frente_id',
            'fecha_nacimiento',
            'fecha_alta',
            'fecha_cuadros',
            'nombres',
            'apellido_materno',
            'apellido_paterno',
            'sexo',
            'origen',
            'colecta',
            'nivel_academico',
            'carrera',
            'titulado',
            'estado_civil',
            'telefono',
            'mail',
            'colonia',
            'calle_numero',
            'direccion',
            'codigo_postal',
            'credencial',
            'curp',
            'clave_ine',
            'nombre_responsable',
            'nombre_familiar',
            'direccion_famiiar',
            'telefono_familiar',
            'facebook',
            'twitter',
            'activo'
    	);
        public function estadoAlta(){
            return $this->belongsTo(EstadosModel::class, "estado_alta_id", "id");
        }
        public function estadoNacimiento(){
            return $this->belongsTo(EstadosModel::class, "estado_nacimiento_id", "id");
        }
        public function frenteOrigen(){
            return $this->belongsTo(FrentesModel::class, "frente_origen_id", "id");
        }
        public function frenteDestino(){
            return $this->belongsTo(FrentesModel::class, "frente_destino_id", "id");
        }
        public function frente(){
            return $this->belongsTo(FrentesModel::class, "frente_id", "id");
        }
        public function nivel(){
			return $this->belongsTo(NivelModel::class, "nivel_id");
		}
        public function organismo(){
            return $this->hasOne(OrgIntModel::class, "clave_integrante", "clave_int");
        }
        
	}
 ?>