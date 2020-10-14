<?php //error_reporting(E_ALL);
	  //ini_set('display_errors', '1');

	/* Conectar a una base de datos de MySQL invocando al controlador */
	$dsn = 'mysql:dbname=etur_voyager;host=localhost';
	$user = 'root';
	$password = '';

	try {
		$pdo = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
		echo 'Falló la conexión: ' . $e->getMessage();
	}

    // Definir tipo de codificación
	header("Content-Type: text/html;charset=utf-8");
	
	// Establecer la zona horaria predeterminada a usar.
	date_default_timezone_set("America/Bogota");
	
	$path = "http://".$_SERVER["SERVER_NAME"]."/etur";

	$current_date = date("Y-m-d");
	$current_time = date("Y-m-d H:i:s");
	
	define("PATH_STORAGE", "controlpanel/public/storage/");

	function getParameter($param) {
		return strip_tags($param);
	}

	function recortarTexto($texto, $limite=100){
		$texto = trim($texto);
		$texto = strip_tags($texto);
		$tamano = strlen($texto);
		$resultado = '';
		if($tamano <= $limite){
			return $texto;
		}else{
			$texto = substr($texto, 0, $limite);
			$palabras = explode(' ', $texto);
			$resultado = implode(' ', $palabras);
			$resultado .= '...';
		}
		return $resultado;
	}
	
	function homologarTexto($texto) {
		return utf8_encode($texto);
	}
	
	function homologarFecha($param) {
		$date = date_create($param);
		return date_format($date,"d-m-Y");
	}
	
	function homologarUrl($param) {
		return strip_tags(str_replace(' ','_',$param));
	}
	
	function getSlug($cadena, $separador = '_')
	{
		$slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
		$slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
		$slug = strtolower(trim($slug, $separador));
		$slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);
		return $slug;
	}
		
	function homologarRutaThumb($ruta) {
		$rutaThumb = PATH_STORAGE.str_replace("../../", "", $ruta);
		return PATH_STORAGE.str_replace("actividades/", "actividades/thumb/", $rutaThumb);
	}

	function homologarRutaCropped($ruta) {
		//$info = new SplFileInfo($rutaImagen);
		//$extension = $info->getExtension();
		//$rutaImagen = str_ireplace(".".$extension,"-cropped.".$extension,$rutaImagen);
		$rutaThumb = PATH_STORAGE.str_replace("\\", "/", $ruta);
		$info = pathinfo($rutaThumb);
		$ext = $info['extension'];
		return str_replace(".".$ext, "-cropped.".$ext, $rutaThumb);
	}

	function homologarRutaMedium($ruta) {
		//$info = new SplFileInfo($rutaImagen);
		//$extension = $info->getExtension();
		//$rutaImagen = str_ireplace(".".$extension,"-medium.".$extension,$rutaImagen);
		$rutaThumb = PATH_STORAGE.str_replace("\\", "/", $ruta);
		$info = pathinfo($rutaThumb);
		$ext = $info['extension'];		
		return str_replace(".".$ext, "-medium.".$ext, $rutaThumb);
	}

	function homologarRuta($ruta) {
		return PATH_STORAGE.str_replace("\\", "/", $ruta);
	}
	
	function homologarRuta3D($ruta,$indice) {
		$imagen = json_decode($ruta, true);
		return PATH_STORAGE.str_replace("\\", "/", $imagen[$indice]);
	}
	
	function homologarRutaVideo($jsonVideo) {
		$video = json_decode($jsonVideo, true);
		return PATH_STORAGE.str_replace("\\", "/", $video[0]['download_link']);
	}

	function homologarRutaArchivo($jsonArchivo) {
		$archivo = json_decode($jsonArchivo, true);
		return PATH_STORAGE.str_replace("\\", "/", $archivo[0]['download_link']);
	}

    function quitar_tildes($cadena) {
        $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
        $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
        $texto = str_replace($no_permitidas, $permitidas ,$cadena);
        return $texto;
    }
    
    //===================Función saber si es IMG===================
    function esImagen($path)
    {
        $imageSizeArray = getimagesize($path);
        $imageTypeArray = $imageSizeArray[2];
        return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }
    //=============================================
    
    // Obtenemos, y validamos enlace actual
    function url_origin($s, $use_forwarded_host=false) {
        $ssl = ( ! empty($s['HTTPS']) && $s['HTTPS'] == 'on' ) ? true:false;
        $sp = strtolower( $s['SERVER_PROTOCOL'] );
        $protocol = substr( $sp, 0, strpos( $sp, '/'  )) . ( ( $ssl ) ? 's' : '' );

        $port = $s['SERVER_PORT'];
        $port = ( ( ! $ssl && $port == '80' ) || ( $ssl && $port=='443' ) ) ? '' : ':' . $port;

        $host = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
        $host = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
        return $protocol . '://' . $host;

    }
    function full_url( $s, $use_forwarded_host=false ) {
        return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
    }

    $enlace = full_url( $_SERVER );

    if (!$enlace || $enlace == '') {
        echo "Falló";
    }

  // "SELECT visitas FROM visitas WHERE ruta='$enlace'"
    $sql = "SELECT visitas FROM visitas WHERE ruta='$enlace'";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $arrcantvisitas = $statement->fetchAll();
    $cantidad_visitas = @$arrcantvisitas[0]['visitas'];
?>