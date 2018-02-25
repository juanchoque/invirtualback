<?php
    require_once '../../service/CuentaService.php';
    require_once '../../model/Cuenta.php';
    
    $cuentaService = new CuentaService();
    echo $cuentaService->listCuenta('', 100, 0);
?>

