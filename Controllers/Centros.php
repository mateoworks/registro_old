<?php 

require_once("Models/v_centros.php");
use Illuminate\Contracts\Pagination;
use Illuminate\Contracts\Pagination\Paginator;

	class Centros extends Controllers{
		public function __construct()
		{
            parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(5);
		}

		public function centros()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
				die();
			}
			header("Location:".base_url().'/centros/page/1');
		}

		public function page($page = 1){
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
				die();
			}
			$data = array();
			$pagina = intval($page);
			
			$seccional = $_SESSION['userData']['seccional_id'];

            if($seccional == 0){
				$filas = VCentrosModel::count();
				$inicio = $this->calcularIntervalo($pagina);
                $centros = VCentrosModel::skip($inicio)->take(20)->get();
            }else{
				$filas = VCentrosModel::where("sec_id", $seccional)->count();
				$inicio = $this->calcularIntervalo($pagina);
                $centros = VCentrosModel::where("sec_id", $seccional)->skip($inicio)->take(20)->get();
            }

			$paginar = paginar($pagina, $filas, "centros");
			$data["link"] = $paginar["link"];
			
            $data["centros"] = $centros->toArray();
			$this->views->getView($this, "centros", $data);
			die();
		}

		public function calcularIntervalo(int $page){
			return ($page - 1) * 20;
		}

		

	}
 ?>