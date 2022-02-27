<?php 

require_once("Models/v_seccionales.php");

	class Seccionales extends Controllers{
		public function __construct()
		{
            parent::__construct();
			session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			getPermisos(2);
		}

		public function seccionales()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = "Seccionales";
			$data['page_title'] = "Seccionles";
			$data['page_name'] = "seccional";
			$data['page_content'] = "Operaciones con seccionales";
            $objSeccionales = VSeccionalesModel::all();
            $seccionales = $objSeccionales->toArray();
            $data['seccionales'] = $seccionales;
			$this->views->getView($this, "seccionales", $data);
		}

	}
 ?>