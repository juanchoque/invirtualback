<?php
    require_once '../../service/CiudadService.php';
    require_once '../../model/Ciudad.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $ciudadService = new CiudadService();
            $ciudad = new Ciudad();
            $ciudad->setId($id);
            echo $ciudadService->deleteCiudad($ciudad);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

