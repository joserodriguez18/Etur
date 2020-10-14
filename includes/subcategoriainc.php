<?php 
	
	include("../conn/config.php");

    $categoria = -1;
    $sub_categoria = -1;
	if(!empty($_GET['categoria']) && !empty($_GET['categoria'])) {
        $categoria = $_GET['categoria'];
        $sub_categoria = $_GET['subcategoria'];
    }

    $titulo = $categoria . " - " . $sub_categoria;

    //===================Categoría===================
    $sql = "	SELECT  * "
    		. "	FROM categorias_cursos "
    		. " WHERE categoria = '".$categoria."';";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $arrcategoria = $statement->fetchAll();
    $id = @$arrcategoria[0]['id'];

    //=============================================	
    
    //===================Empresas===================
    $sql = "SELECT CC.categoria, SCC.id, SCC.subcategoria FROM categorias_cursos as CC INNER JOIN subcategorias_cursos as SCC ON CC.id=SCC.id_categoria WHERE CC.id=$id ORDER BY SCC.subcategoria ASC LIMIT 0, 100";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $arrsubcategorias = $statement->fetchAll();
    

    //=============================================	
