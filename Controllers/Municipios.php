<?php 

require_once("Models/v_municipios.php");

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
			$data = array();
			
			$seccional = $_SESSION['userData']['seccional_id'];
            if($seccional == 0){
                $muni = VMunicipiosModel::all();
            }else{
                $muni = VMunicipiosModel::where("seccional_id", $seccional)->get();
            }
            $data["municipios"] = $muni->toArray();
			$this->views->getView($this, "municipios", $data);
		}

	}
 ?>