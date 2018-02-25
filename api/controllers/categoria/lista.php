<?php
    require_once '../../service/CategoriaService.php';
    require_once '../../model/Categoria.php';
    
    $categoriaService = new CategoriaService();
    echo $categoriaService->listCategoria('', 100, 0);
?>

