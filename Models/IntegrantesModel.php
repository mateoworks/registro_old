<?php 
use Illuminate\Database\Eloquent\Model;
	class IntegrantesModel extends Model
	{
		protected $table = 'integrantes';
        public $timestamps = false;

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
	}
 ?>