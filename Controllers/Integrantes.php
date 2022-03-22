<?php 

require_once("Models/v_integrantes.php");
require_once("Models/EstadosModel.php");
require_once("Models/FrentesModel.php");
require_once("Models/NivelModel.php");
require_once("Models/v_crudintegrantes.php");


	class Integrantes extends Controllers{
		private $seccional;
		public function __construct()
		{
            parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			$seccional = $_SESSION['userData']['seccional_id'];
			getPermisos(7);
		}

		public function integrantes()
		{

			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
				die();
			}
			$data = array();
            if($this->seccional == 0){
                $integrantes = VIntegrantesModel::all();
            }else{
                $integrantes = VIntegrantesModel::where("seccional_id", $this->seccional)->get();
            }
            $data["integrantes"] = $integrantes->toArray();
			$this->views->getView($this, "integrantes", $data);
		}

		public function crear(){
			if(empty($_SESSION['permisosMod']['w'])){
				header("Location:".base_url().'/dashboard');
				die();
			}
			$estados = EstadosModel::all();
			$frentes = FrentesModel::all();
			$niveles = NivelModel::all();
			$data["estados"] = $estados;
			$data["frentes"] = $frentes;
			$data["niveles"] = $niveles;
			$this->views->getView($this, "crear", $data);
		}

		public function guardar(){
			if(empty($_SESSION['permisosMod']['w'])){
				header("Location:".base_url().'/dashboard');
				die();
			}
			$clave_int = strClean($_POST["clave_int"]);
			$nombres = strClean($_POST["nombres"]);
			$apellido_paterno = strClean($_POST["apellido_paterno"]);
			$apellido_materno = strClean($_POST["apellido_materno"]);
			$nivel_id = intval($_POST["nivel_id"]);
			$sexo = strClean($_POST["sexo"]);
			$fecha_nacimiento = strClean($_POST["fecha_nacimiento"]);
			$fecha_alta = strClean($_POST["fecha_alta"]);
			$fecha_cuadros = strClean($_POST["fecha_cuadros"]);
			$estado_alta_id = intval($_POST["estado_alta_id"]);
			$estado_nacimiento_id = intval($_POST["estado_nacimiento_id"]);
			$frente_origen_id = intval($_POST["frente_origen_id"]);
			$frente_destino_id = intval($_POST["frente_destino_id"]);
			$frente_id = intval($_POST["frente_id"]);
			$origen = strClean($_POST["origen"]);
			$colecta = isset($_POST["colecta"]) ? "1" : "0";
			$nivel_academico = strClean($_POST["nivel_academico"]);
			$carrera = strClean($_POST["carrera"]);
			$titulado = isset($_POST["titulado"]) ? "1" : "0";
			$estado_civil = strClean($_POST["estado_civil"]);
			$telefono = strClean($_POST["telefono"]);
			$email = strClean($_POST["email"]);
			$calle_numero = strClean($_POST["calle_numero"]);
			$codigo_postal = strClean($_POST["codigo_postal"]);
			$credencial = isset($_POST["credencial"]) ? "1" : "0";
			$curp = strClean($_POST["curp"]);
			$clave_ine = strClean($_POST["clave_ine"]);
			$nombre_responsable = strClean($_POST["nombre_responsable"]);
			$nombre_familiar = strClean($_POST["nombre_familiar"]);
			$direccion_familiar = strClean($_POST["direccion_familiar"]);
			$telefono_familiar = strClean($_POST["telefono_familiar"]);
			$facebook = strClean($_POST["facebook"]);
			$twitter = strClean($_POST["twitter"]);
			if(empty($clave_int) || empty($nombres) || empty($apellido_paterno) || empty($nivel_id)
		    || empty($fecha_nacimiento) || empty($fecha_alta) || empty($estado_alta_id) 
			|| empty($frente_origen_id) || empty($frente_destino_id)  || empty($frente_id) || empty($origen) 
		    || empty($nivel_academico) || empty($estado_civil) || empty($curp) 
			|| empty($nombre_responsable)){
				header("Location:".base_url().'/integrantes/crear');
				die();
			}
			$foto = "integrante.png";
			if(isset($_FILES['foto'])){
				$directorio = "Assets/images/fotos_integrantes/";
				if(!file_exists($directorio)){
					error_log("No existe el directorio");
				}else{
					$source = $_FILES["foto"]["tmp_name"];
					$name = $_FILES["foto"]["name"];
	
					$temp = explode(".", $name);
					$extencion = end($temp);
					$nombre_img = rand() . uniqid() . "." . $extencion;
					$target = $directorio . $nombre_img;

					if(move_uploaded_file($source, $target)){
						$foto = $nombre_img;
					}else{
						log("No se pudo copiar");
						$foto = "integrante.png";
					}
				}
			}
			$imagen_credencial = "";
			if(isset($_FILES['imagen_credencial'])){
				$directorio = "Assets/images/credenciales/";
				if(!file_exists($directorio)){
					error_log("No existe el directorio");
				}else{
					$source = $_FILES["imagen_credencial"]["tmp_name"];
					$name = $_FILES["imagen_credencial"]["name"];
	
					$temp = explode(".", $name);
					$extencion = end($temp);
					$nombre_img = rand() . uniqid() . "." . $extencion;
					$target = $directorio . $nombre_img;

					if(move_uploaded_file($source, $target)){
						$imagen_credencial = $nombre_img;
					}else{
						log("No se pudo copiar");
						$imagen_credencial = "";
					}
				}
			}
			$integrante = new IntegrantesModel();
			$integrante->clave_int = $clave_int;
			$integrante->apellido_paterno = $apellido_paterno;
			$integrante->apellido_materno = $apellido_materno;
			$integrante->nivel_id = $nivel_id;
			$integrante->sexo = $sexo;
			$integrante->fecha_nacimiento = $fecha_nacimiento;
			$integrante->fecha_alta = $fecha_alta;
			$integrante->fecha_cuadros = $fecha_cuadros;
			$integrante->estado_alta_id = $estado_alta_id;
			$integrante->estado_nacimiento_id = $estado_nacimiento_id;
			$integrante->frente_origen_id = $frente_origen_id;
			$integrante->frente_destino_id = $frente_destino_id;
			$integrante->frente_id = $frente_id;
			$integrante->origen = $origen;
			$integrante->colecta = $colecta;
			$integrante->nivel_academico = $nivel_academico;
			$integrante->carrera = $carrera;
			$integrante->titulado = $titulado;
			$integrante->estado_civil = $estado_civil;
			$integrante->telefono = $telefono;
			$integrante->mail = $email;
			$integrante->clave_int = $clave_int;
			$integrante->calle_numero = $calle_numero;
			$integrante->codigo_postal = $codigo_postal;
			$integrante->credencial = $credencial;
			$integrante->curp = $curp;
			$integrante->clave_ine = $clave_ine;
			$integrante->nombre_responsable = $nombre_responsable;
			$integrante->nombre_familiar = $nombre_familiar;
			$integrante->direccion_familiar = $direccion_familiar;
			$integrante->telefono_familiar = $telefono_familiar;
			$integrante->facebook = $facebook;
			$integrante->twitter = $twitter;
			$integrante->foto = $foto;
			$integrante->imagen_credencial = $imagen_credencial;
			if($integrante->save()){
				dep($integrante);
			}
		}
		public function pagina($page = 1){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
				die();
			}
			$pagina = intval($page);
			$data = array();
			
			$seccional = $_SESSION['userData']['seccional_id'];
            if($seccional == 0){
				$filas = VCrudIntegrantes::count();
				$inicio = $this->calcularIntervalo($pagina);
                $integrantes = VCrudIntegrantes::skip($inicio)->take(15)->get();
            }else{
				$filas = VCrudIntegrantes::where("seccional_id", $seccional)->count();
				$inicio = $this->calcularIntervalo($pagina);
                $integrantes = VCrudIntegrantes::where("seccional_id", $seccional)->skip($inicio)->take(15)->get();
            }

			$paginar = paginarcrud($pagina, $filas, "integrantes");
			$data["link"] = $paginar["link"];

            $data["integrantes"] = $integrantes->toArray();
			$this->views->getView($this, "crudintegrantes", $data);
		}

		public function calcularIntervalo(int $page){
			return ($page - 1) * 15;
		}
		public function integrantescrud(){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			header("Location:".base_url().'/integrantes/pagina/1');
		}
		
		public function ver($idInt){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
				die();
			}
			$id = strClean($idInt);
			$integrante = IntegrantesModel::find($id);
			$data["integrante"] = $integrante;
			$organismo = OrgIntModel::where("clave_integrante", $id)->get();
			$data["organismo"] = $organismo->toArray();
			$this->views->getView($this, "ver", $data);
		}
		public function asignarOrganismo($idInt){

		}

	}
 ?>