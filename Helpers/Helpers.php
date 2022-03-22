<?php 

	//Retorla la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}
    //Retorla la url de Assets
    function media()
    {
        return BASE_URL."/Assets";
    }
    function headerAdmin($data="")
    {
        $view_header = "Views/Template/header_admin.php";
        require_once ($view_header);
    }
    function footerAdmin($data="")
    {
        $view_footer = "Views/Template/footer_admin.php";
        require_once ($view_footer);        
    }
	//Muestra información formateada
	function dep($data)
    {
        $format  = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }
    function getModal(string $nameModal, $data)
    {
        $view_modal = "Views/Template/Modals/{$nameModal}.php";
        require_once $view_modal;        
    }
    //Envio de correos
    function sendEmail($data,$template)
    {
        $asunto = $data['asunto'];
        $emailDestino = $data['email'];
        $empresa = NOMBRE_REMITENTE;
        $remitente = EMAIL_REMITENTE;
        //ENVIO DE CORREO
        $de = "MIME-Version: 1.0\r\n";
        $de .= "Content-type: text/html; charset=UTF-8\r\n";
        $de .= "From: {$empresa} <{$remitente}>\r\n";
        ob_start();
        require_once("Views/Template/Email/".$template.".php");
        $mensaje = ob_get_clean();
        $send = mail($emailDestino, $asunto, $mensaje, $de);
        return $send;
    }

    function getPermisos(int $idmodulo){
        require_once ("Models/PermisosModel.php");
        $objPermisos = new PermisosModel();
        $idrol = $_SESSION['userData']['idrol'];
        $arrPermisos = $objPermisos->permisosModulo($idrol);
        $permisos = '';
        $permisosMod = '';
        if(count($arrPermisos) > 0 ){
            $permisos = $arrPermisos;
            $permisosMod = isset($arrPermisos[$idmodulo]) ? $arrPermisos[$idmodulo] : "";
        }
        $_SESSION['permisos'] = $permisos;
        $_SESSION['permisosMod'] = $permisosMod;
    }

    function sessionUser(int $idpersona){
        require_once ("Models/LoginModel.php");
        $objLogin = new LoginModel();
        $request = $objLogin->sessionLogin($idpersona);
        return $request;
    }

    function paginar(int $page, int $filas, $modulo){
		$filasTabla = $filas;
			$pagina = intval($page);
			$data = array();
			$FILAS = 20;
			$data["link"] = "";
			$paginas = ceil($filasTabla / $FILAS);			
			if($pagina > 1){
				$data["link"] .= "
				<li class='page-item'>
					<a class='page-link' href='" . base_url() . "/$modulo/page/" . $pagina - 1 ."' aria-label='Previous'>
						<span aria-hidden='true'>&laquo;</span>
					</a>
				</li>";
			}
			if($pagina > 3){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/page/" . 1 . "'>1</a></li>";
				$data["link"] .= ". . .";
			}
			if($pagina - 2 > 0){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/page/" . $pagina - 2 . "'>" . $pagina - 2 ."</a></li>";
			}
			if($pagina - 1 > 0){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/page/" . $pagina - 1 . "'>" . $pagina - 1 ."</a></li>";
			}
			$data["link"] .= "<li class='page-item active'><a class='page-link' href='" . base_url() . "/$modulo/page/" . $pagina . "'>" . $pagina . "</a></li>";
			if($pagina + 1 < $paginas + 1){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/page/" . $pagina + 1 . "'>" . $pagina + 1 ."</a></li>";
			}
			if($pagina + 2 < $paginas + 1){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/page/" . $pagina + 2 . "'>" . $pagina + 2 ."</a></li>";
			}
			if($pagina < $paginas - 2){
				$data["link"] .= ". . .";
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/page/" . $paginas . "'>" . $paginas ."</a></li>";
			}
			if($pagina < $paginas){
				$data["link"] .= "
				<li class='page-item'>
					<a class='page-link' href='" . base_url() . "/$modulo/page/" . $page + 1 ."' aria-label='Next'>
						<span aria-hidden='true'>&raquo;</span>
					</a>
				</li>";
			}

			return $data;
	}

    function paginarcrud(int $page, int $filas, $modulo){
		$filasTabla = $filas;
			$pagina = intval($page);
			$data = array();
			$FILAS = 20;
			$data["link"] = "";
			$paginas = ceil($filasTabla / $FILAS);			
			if($pagina > 1){
				$data["link"] .= "
				<li class='page-item'>
					<a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $pagina - 1 ."' aria-label='Previous'>
						<span aria-hidden='true'>&laquo;</span>
					</a>
				</li>";
			}
			if($pagina > 3){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/pagina/" . 1 . "'>1</a></li>";
				$data["link"] .= ". . .";
			}
			if($pagina - 2 > 0){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $pagina - 2 . "'>" . $pagina - 2 ."</a></li>";
			}
			if($pagina - 1 > 0){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $pagina - 1 . "'>" . $pagina - 1 ."</a></li>";
			}
			$data["link"] .= "<li class='page-item active'><a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $pagina . "'>" . $pagina . "</a></li>";
			if($pagina + 1 < $paginas + 1){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $pagina + 1 . "'>" . $pagina + 1 ."</a></li>";
			}
			if($pagina + 2 < $paginas + 1){
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $pagina + 2 . "'>" . $pagina + 2 ."</a></li>";
			}
			if($pagina < $paginas - 2){
				$data["link"] .= ". . .";
				$data["link"] .= "<li class='page-item'><a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $paginas . "'>" . $paginas ."</a></li>";
			}
			if($pagina < $paginas){
				$data["link"] .= "
				<li class='page-item'>
					<a class='page-link' href='" . base_url() . "/$modulo/pagina/" . $page + 1 ."' aria-label='Next'>
						<span aria-hidden='true'>&raquo;</span>
					</a>
				</li>";
			}

			return $data;
	}    
    //Elimina exceso de espacios entre palabras
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string); //Elimina espacios en blanco al inicio y al final
        $string = stripslashes($string); // Elimina las \ invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
    }
    //Genera una contraseña de 10 caracteres
	function passGenerator($length = 10)
    {
        $pass = "";
        $longitudPass=$length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);

        for($i=1; $i<=$longitudPass; $i++)
        {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }
    //Genera un token
    function token()
    {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }
    //Formato para valores monetarios
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }
    

 ?>