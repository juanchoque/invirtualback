<?php
    require_once '../../service/TipocuentaService.php';
    require_once '../../model/Tipocuenta.php';
    
    $tipocuentaService = new TipocuentaService();
    echo $tipocuentaService->listTipocuenta('', 100, 0);
?>

