<?php
    require_once '../../service/TipoavisoService.php';
    require_once '../../model/Tipoaviso.php';
    
    $tipoavisoService = new TipoavisoService();
    echo $tipoavisoService->listTipoaviso('', 100, 0);
?>

