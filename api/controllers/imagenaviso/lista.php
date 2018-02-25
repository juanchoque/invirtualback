<?php
    require_once '../../service/ImagenAvisoService.php';
    require_once '../../model/ImagenAviso.php';
    
    $tipoavisoService = new ImagenAvisoService();
    echo $tipoavisoService->listImagenAviso('', 100, 0);
?>

