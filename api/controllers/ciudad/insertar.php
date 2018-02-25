<?php
    require_once '../../service/CiudadService.php';
    require_once '../../model/Ciudad.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        $pais = $data->pais;
        if($nombre != NULL && $pais != NULL){
            $ciudadService = new CiudadService();
            $ciudad = new Ciudad();
            $ciudad->setNombre($nombre);
            $ciudad->setPais($pais);
            $ciudad->setOrden(1);
            echo $ciudadService->saveCiudad($ciudad);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

