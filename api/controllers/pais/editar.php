<?php
    require_once '../../service/PaisService.php';
    require_once '../../model/Pais.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombre = $data->nombre;
        if($nombre != NULL && $id != NULL){
            $paisService = new PaisService();
            $pais = new Pais();
            $pais->setId($id);
            $pais->setNombre($nombre);
            echo $paisService->updatePais($pais);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

