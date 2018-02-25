<?php
    require_once '../../service/TipocuentaService.php';
    require_once '../../model/Tipocuenta.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        if($nombre != NULL){
            $tipocuentaService = new TipocuentaService();
            $tipocuenta = new Tipocuenta();
            $tipocuenta->setNombre($nombre);
            $tipocuenta->setOrden(1);
            echo $tipocuentaService->saveTipocuenta($tipocuenta);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

