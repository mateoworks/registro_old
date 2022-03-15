<?php 
require_once("Models/SeccionalesModel.php");
	class Roles extends Controllers{
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

		public function Roles()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_id'] = 3;
			$data['page_tag'] = "Roles Usuario";
			$data['page_name'] = "rol_usuario";
			$data['page_title'] = "Panel de roles";
			$data['page_functions_js'] = "functions_roles.js";
			$this->views->getView($this,"roles",$data);
		}

		public function crear(){
			$seccionales = SeccionalesModel::all();
			$data["seccionales"] = $seccionales->toArray();
			$this->views->getView($this, "crear", $data);
		}

		public function editar($idrol){
			$id = intval($idrol);
			$data["rol"] = $this->getRolById($id);
			$seccionales = SeccionalesModel::all();
			$data["seccionales"] = $seccionales->toArray();
			$this->views->getView($this, "editar", $data);
			
		}

		public function getRoles()
		{
			if($_SESSION['permisosMod']['r']){
				$btnView = '';
				$btnEdit = '';
				$btnDelete = '';
				$arrData = $this->model->selectRoles();

				for ($i=0; $i < count($arrData); $i++) {

					if($arrData[$i]['estado'] == 1)
					{
						$arrData[$i]['estado'] = '<span class="badge bg-success rounded-pill">Activo</span>';
					}else{
						$arrData[$i]['estado'] = '<span class="badge bg-danger rounded-pill">Inactivo</span>';
					}
					if($arrData[$i]["seccional_id"] == 0){
						$arrData[$i]["nombre_seccional"] = "Supremo líder estatal";
					}

					if($_SESSION['permisosMod']['u']){
						$btnView = '<button class="btn btn-secondary btn-sm btnPermisosRol" onClick="fntPermisos('.$arrData[$i]['id'].')" title="Permisos"><i class="uil-key-skeleton-alt"></i></button>';
						$btnEdit = '<a class="btn btn-primary btn-sm btnEditRol" href="' . base_url() . '/Roles/editar/' . $arrData[$i]['id'].'" title="Editar"><i class="dripicons-pencil"></i></a>';
					}
					if($_SESSION['permisosMod']['d']){
						$btnDelete = '<button class="btn btn-danger btn-sm btnDelRol" onClick="fntDelRol('.$arrData[$i]['id'].')" title="Eliminar"><i class="dripicons-trash"></i></button>
					</div>';
					}
					$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
				}
				echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	
		public function getSelectRoles()
		{
			$htmlOptions = "";
			$arrData = $this->model->selectRoles();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					if($arrData[$i]['estado'] == 1 ){
					$htmlOptions .= '<option value="'.$arrData[$i]['id'].'">'.$arrData[$i]['nombre_rol'].'</option>';
					}
				}
			}
			echo $htmlOptions;
			die();		
		}

		public function getRolById(int $idrol){
			if($_SESSION['permisosMod']['r']){
				$intIdrol = intval(strClean($idrol));
				if($intIdrol > 0)
				{
					$arrData = $this->model->selectRol($intIdrol);
					if(empty($arrData))
					{
						error_log("No hay rol con ese ID");
					}else{
						return $arrData;
					}
				}
			}
			die();
		}

		public function getRol(int $idrol)
		{
			if($_SESSION['permisosMod']['r']){
				$intIdrol = intval(strClean($idrol));
				if($intIdrol > 0)
				{
					$arrData = $this->model->selectRol($intIdrol);
					if(empty($arrData))
					{
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		public function setRol(){
				$intIdrol = intval($_POST['idRol']);
				$strRol =  strClean($_POST['nombre_rol']);
				$strDescipcion = strClean($_POST['descripcion']);
				$intStatus = intval($_POST['estado']);
				$intSeccional = intval($_POST["seccional"]);
				$request_rol = "";
				if($intIdrol == 0)
				{
					//Crear
					if($_SESSION['permisosMod']['w']){
						$request_rol = $this->model->insertRol($strRol, $strDescipcion,$intStatus, $intSeccional);
						$option = 1;
						header("Location:".base_url().'/roles');
						die();
					}
				}else{
					//Actualizar
					if($_SESSION['permisosMod']['u']){
						$request_rol = $this->model->updateRol($intIdrol, $strRol, $strDescipcion, $intStatus, $intSeccional);
						error_log("Se envío");
					}		
				}

				
				header("Location:".base_url().'/roles');
				die();
		}

		public function delRol()
		{
			if($_POST){
				if($_SESSION['permisosMod']['d']){
					$intIdrol = intval($_POST['idrol']);
					$requestDelete = $this->model->deleteRol($intIdrol);
					if($requestDelete == 'ok')
					{
						$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Rol');
					}else if($requestDelete == 'exist'){
						$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Rol asociado a usuarios.');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Rol.');
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

	}
 ?>