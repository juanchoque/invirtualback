<?php
    require_once '../../service/AvisoService.php';
    require_once '../../model/Aviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $avisoService = new AvisoService();
            $aviso = new Aviso();
            $aviso->setId($id);
            echo json_encode($avisoService->deleteAviso($aviso));
        }
        else{
            echo json_encode("Datos Incorrectos");
        }
    } catch (Exception $ex) {
        echo json_encode("Entra por errores");
    }
?>

