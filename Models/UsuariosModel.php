<?php 

	class UsuariosModel extends Mysql
	{
		private $intIdUsuario;
		private $strIdentificacion;
		private $strNombre;
		private $strApellido;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $strToken;
		private $intTipoId;
		private $intStatus;
		private $strNit;
		private $strNomFiscal;
		private $strDirFiscal;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $nombre, string $apellido, string $telefono, string $email, string $password, int $tipoid, int $status){

			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;
			$return = 0;

			$sql = "SELECT * FROM usuarios WHERE 
					email = '{$this->strEmail}'";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO usuarios(nombre_propio, apellidos, telefono, email, password,rol_id, estado) 
								  VALUES(?,?,?,?,?,?,?)";
	        	$arrData = array(
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function selectUsuarios()
		{
			$whereAdmin = "";
			if($_SESSION['idUser'] != 1 ){
				$whereAdmin = " and u.id != 1 ";
			}
			$sql = "SELECT u.id, u.nombre_propio, u.apellidos, u.telefono, u.email, u.estado, r.id as id_rol, r.nombre_rol 
					FROM usuarios u 
					INNER JOIN roles r
					ON u.rol_id = r.id
					WHERE u.estado != 0 ".$whereAdmin;
					$request = $this->select_all($sql);
					return $request;
		}

		public function selectUsuario(int $idpersona){
			$this->intIdUsuario = $idpersona;
			$sql = "SELECT u.id, u.nombre_propio, u.apellidos, u.telefono, u.email, r.id, r.nombre_rol, u.estado as status, DATE_FORMAT(u.fecha_registro, '%d-%m-%Y') as fechaRegistro 
					FROM usuarios u
					INNER JOIN roles r
					ON u.rol_id = r.id
					WHERE u.id = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario(int $idUsuario, string $nombre, string $apellido, int $telefono, string $email, string $password, int $tipoid, int $status){

			$this->intIdUsuario = $idUsuario;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM usuarios WHERE (email = '{$this->strEmail}' AND id != $this->intIdUsuario)";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE usuarios SET nombre_propio=?, apellidos=?, telefono=?, email=?, password=?, rol_id=?, estado=? 
							WHERE id = $this->intIdUsuario ";
					$arrData = array(
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
	        						$this->intTipoId,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE usuarios SET nombre_propio=?, apellidos=?, telefono=?, email=?, rol_id=?, estado=? 
							WHERE id = $this->intIdUsuario ";
					$arrData = array(
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->intTipoId,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
		public function deleteUsuario(int $intIdpersona)
		{
			$this->intIdUsuario = $intIdpersona;
			$sql = "UPDATE usuarios SET estado = ? WHERE id = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		public function updatePerfil(int $idUsuario, string $identificacion, string $nombre, string $apellido, int $telefono, string $password){
			$this->intIdUsuario = $idUsuario;
			$this->strIdentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strPassword = $password;

			if($this->strPassword != "")
			{
				$sql = "UPDATE usuarios SET nombre_propio=?, apellidos=?, telefono=?, password=? 
						WHERE id = $this->intIdUsuario ";
				$arrData = array(
								$this->strNombre,
								$this->strApellido,
								$this->intTelefono,
								$this->strPassword);
			}else{
				$sql = "UPDATE usuarios SET nombre_propio=?, apellidos=?, telefono=? 
						WHERE id = $this->intIdUsuario ";
				$arrData = array(
								$this->strNombre,
								$this->strApellido,
								$this->intTelefono);
			}
			$request = $this->update($sql,$arrData);
		    return $request;
		}

		public function updateDataFiscal(int $idUsuario, string $strNit, string $strNomFiscal, string $strDirFiscal){
			$this->intIdUsuario = $idUsuario;
			$this->strNit = $strNit;
			$this->strNomFiscal = $strNomFiscal;
			$this->strDirFiscal = $strDirFiscal;
			$sql = "UPDATE persona SET nit=?, nombrefiscal=?, direccionfiscal=? 
						WHERE idpersona = $this->intIdUsuario ";
			$arrData = array($this->strNit,
							$this->strNomFiscal,
							$this->strDirFiscal);
			$request = $this->update($sql,$arrData);
		    return $request;
		}

	}
 ?>