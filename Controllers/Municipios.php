<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once("Models/v_seccionales.php");
require_once("Models/v_municipios.php");
require_once("Models/v_crudmunicipios.php");
require_once("Models/v_crudcentros.php");

	class Municipios extends Controllers{
		public function __construct()
		{
            parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(4);
		}

		public function municipios()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			header("Location:".base_url().'/municipios/page/1');
		}
		//================ Para el crud
		public function municipioscrud(){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			header("Location:".base_url().'/municipios/pagina/1');
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
				$filas = VMunicipiosModel::count();
				$inicio = $this->calcularIntervalo($pagina);
                $muni = VMunicipiosModel::skip($inicio)->take(15)->get();
            }else{
				$filas = VMunicipiosModel::where("seccional_id", $seccional)->count();
				$inicio = $this->calcularIntervalo($pagina);
                $muni = VMunicipiosModel::where("seccional_id", $seccional)->skip($inicio)->take(15)->get();
            }

			$paginar = paginarcrud($pagina, $filas, "municipios");
			$data["link"] = $paginar["link"];

            $data["municipios"] = $muni->toArray();
			$this->views->getView($this, "crudmunicipios", $data);
		}

		public function ver($idm){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$id = intval($idm);
			$seccional = $_SESSION['userData']['seccional_id'];
			$centros = "";
			if($seccional == 0){
				$municipio = MunicipiosModel::find($id);
				$centros = VCrudCentros::where("mun_id", $id)->get();
				$data["no_nivel"] = $this->integrantesNivel($id);
			}else{
				$aux = VMunicipiosModel::where("seccional_id", $seccional)
				->where("id", $id)->get();
				if(!empty($aux)){
					$municipio = MunicipiosModel::find($id);
					$centros = VCrudCentros::where("mun_id", $id)->get();
					$data["no_nivel"] = $this->integrantesNivel($id);
				}
			}
			$data["municipio"] = $municipio;
			$data["centros"] = $centros;
			$this->views->getView($this, "ver", $data);
		}

		public function integrantesNivel($id){
			$nivel["M"] = Capsule::select("call no_nivel_municipio(?, ?)", [$id, "M"]);
			$nivel["S"] = Capsule::select("call no_nivel_municipio(?, ?)", [$id, "S"]);
			$nivel["A"] = Capsule::select("call no_nivel_municipio(?, ?)", [$id, "A"]);
			$nivel["MA"] = Capsule::select("call no_nivel_municipio(?, ?)", [$id, "MA"]);
			$nivel["MAE"] = Capsule::select("call no_nivel_municipio(?, ?)", [$id, "MAE"]);
			$nivel["CA"] = Capsule::select("call no_nivel_municipio(?, ?)", [$id, "CA"]);
			$nivel["CAE"] = Capsule::select("call no_nivel_municipio(?, ?)", [$id, "CAE"]);
			return $nivel;
		}

		//============== Para la tabla básica 
		public function page($page = 1){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$pagina = intval($page);
			$data = array();
			
			$seccional = $_SESSION['userData']['seccional_id'];
            if($seccional == 0){
				$filas = VMunicipiosModel::count();
				$inicio = $this->calcularIntervalo($pagina);
                $muni = VMunicipiosModel::skip($inicio)->take(15)->get();
            }else{
				$filas = VMunicipiosModel::where("seccional_id", $seccional)->count();
				$inicio = $this->calcularIntervalo($pagina);
                $muni = VMunicipiosModel::where("seccional_id", $seccional)->skip($inicio)->take(15)->get();
            }

			$paginar = paginar($pagina, $filas, "municipios");
			$data["link"] = $paginar["link"];

            $data["municipios"] = $muni->toArray();
			$this->views->getView($this, "municipios", $data);
		}
		public function calcularIntervalo(int $page){
			return ($page - 1) * 15;
		}

		public function getSeccionales(){
			$seccional = $_SESSION['userData']['seccional_id'];
			if($seccional == 0){
				$seccionales = VSeccionalesModel::all();
			}else{
				$seccionales = VSeccionalesModel::where("id", $seccional);
			}
			return $seccionales;
		}

		public function getIntegrantesByName($nombre){
			$seccional = $_SESSION['userData']['seccional_id'];
			if($seccional == 0){
				$seccionales = VSeccionalesModel::all();
			}else{
				$seccionales = VSeccionalesModel::where("id", $seccional);
			}
		}

	}
 ?>