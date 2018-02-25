<?php
    require_once '../../service/TipoavisoService.php';
    require_once '../../model/Tipoaviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombre = $data->nombre;
        if($nombre != NULL && $id != NULL){
            $tipoavisoService = new TipoavisoService();
            $tipoaviso = new Tipoaviso();
            $tipoaviso->setId($id);
            $tipoaviso->setNombre($nombre);
            echo $tipoavisoService->updateTipoaviso($tipoaviso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

