<?php 

require_once("Models/v_centros.php");
use Illuminate\Contracts\Pagination;
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
			}
			$data = array();
			$seccional = $_SESSION['userData']['seccional_id'];
            if($seccional == 0){
                $centros = VCentrosModel::all();
            }else{
                $centros = VCentrosModel::where("sec_id", $seccional)->get();
            }
            $data["centros"] = $centros->toArray();
			$this->views->getView($this, "centros", $data);
		}

	}
 ?>