<?php
    require_once '../../service/PaisService.php';
    require_once '../../model/Pais.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $paisService = new PaisService();
            $pais = new Pais();
            $pais->setId($id);
            echo $paisService->deletePais($pais);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

