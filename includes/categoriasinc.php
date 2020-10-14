<?php 
	
	include("../conn/config.php");

    //===================Categorías===================
    $sql = "	SELECT  * FROM categorias_cursos";
    $statement = $pdo->prepare($sql);
    $statement->execute(array());
    $arrcategorias = $statement->fetchAll();
    $imagen = "../".homologarRuta($arrcategorias[0]['imagen']);

    //=============================================	
    
?>