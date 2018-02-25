<?php
    require_once '../../service/PaisService.php';
    require_once '../../model/Pais.php';
    
    $paisService = new PaisService();
    echo $paisService->listPais('', 100, 0);
?>

