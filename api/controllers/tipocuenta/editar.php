<?php
    require_once '../../service/TipocuentaService.php';
    require_once '../../model/Tipocuenta.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombre = $data->nombre;
        if($nombre != NULL && $id != NULL){
            $tipocuentaService = new TipocuentaService();
            $tipocuenta = new Tipocuenta();
            $tipocuenta->setId($id);
            $tipocuenta->setNombre($nombre);
            echo $tipocuentaService->updateTipocuenta($tipocuenta);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

