<?php
    require_once '../../service/CuentaService.php';
    require_once '../../model/Cuenta.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombres = $data->nombres;
        $ci = $data->ci;
        $tipocuenta = $data->tipocuenta;
        $ciudad = $data->ciudad;
        if($nombres != NULL && $id != NULL && $ci != NULL && $tipocuenta != NULL && $ciudad != NULL){
            $cuentaService = new CuentaService();
            $cuenta = new Cuenta();
            $cuenta->setId($id);
            $cuenta->setCi($ci);
            $cuenta->setNombres($nombres);
            $cuenta->setTipoCuenta($tipocuenta);
            $cuenta->setCiudad($ciudad);
            echo $cuentaService->updateCuenta($cuenta);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

