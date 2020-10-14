<?php 
	
	define("NRO_REGISTROS",50);
	include("conn/config.php");
	
    //===================Categorías===================
    $sql = "	SELECT  * "
    		. "	FROM categorias_cursos"
    		. " ORDER BY categoria ASC"
    		. " LIMIT 0, 3";	
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $arrcategorias = $statement->fetchAll();
    // print_r($arrcategorias);
    
?>