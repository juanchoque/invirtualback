<?php
    require_once '../../service/AvisoService.php';
    require_once '../../model/Aviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $descripcion = $data->descripcion;
        
        $avisoService = new AvisoService();
        echo $avisoService->listAviso($descripcion, 100, 0);
    } catch (Exception $exc) {
      echo $exc->getTraceAsString();
    }
?>

