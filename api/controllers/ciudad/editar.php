<?php
    require_once '../../service/CiudadService.php';
    require_once '../../model/Ciudad.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombre = $data->nombre;
        $pais = $data->pais;
        if($nombre != NULL && $id != NULL && $pais != NULL){
            $ciudadService = new CiudadService();
            $ciudad = new Ciudad();
            $ciudad->setId($id);
            $ciudad->setPais($pais);
            $ciudad->setNombre($nombre);
            echo $ciudadService->updateCiudad($ciudad);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

