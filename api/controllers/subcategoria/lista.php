<?php
    require_once '../../service/SubCategoriaService.php';
    require_once '../../model/SubCategoria.php';
    
    $subcategoriaService = new SubCategoriaService();
    echo $subcategoriaService->listSubCategoria('', 100, 0);
?>

