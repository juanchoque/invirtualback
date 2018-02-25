<?php
    require_once '../../service/CiudadService.php';
    require_once '../../model/Ciudad.php';
    
    $ciudadService = new CiudadService();
    echo $ciudadService->listCiudad('', 100, 0);
?>

