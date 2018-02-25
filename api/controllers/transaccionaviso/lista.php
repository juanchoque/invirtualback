<?php
    require_once '../../service/TransaccionavisoService.php';
    require_once '../../model/Transaccionaviso.php';
    
    $transaccionavisoService = new TransaccionavisoService();
    echo $transaccionavisoService->listTransaccionaviso('', 100, 0);
?>