<?php 

require_once("Models/v_integrantes.php");

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

	}
 ?>