<?php
    require_once '../../service/CuentaService.php';
    require_once '../../model/Cuenta.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $cuentaService = new CuentaService();
            $cuenta = new Cuenta();
            $cuenta->setId($id);
            echo $cuentaService->deleteCuenta($cuenta);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

