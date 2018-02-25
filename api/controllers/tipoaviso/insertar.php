<?php
    require_once '../../service/TipoavisoService.php';
    require_once '../../model/Tipoaviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        if($nombre != NULL){
            $tipoavisoService = new TipoavisoService();
            $tipoaviso = new Tipoaviso();
            $tipoaviso->setNombre($nombre);
            echo $tipoavisoService->saveTipoaviso($tipoaviso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

