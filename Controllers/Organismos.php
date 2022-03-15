<?php 

require_once("Models/v_organismos.php");

	class Organismos extends Controllers{
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
			getPermisos(6);
		}

		public function organismos()
		{

			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data = array();
            if($this->seccional == 0){
                $org = VOrganismosModel::all();
            }else{
                $org = VOrganismosModel::where("seccional_id", $this->seccional)->get();
            }
            $data["organismos"] = $org->toArray();
			$this->views->getView($this, "organismos", $data);
		}

	}
 ?>