<?php
    require_once '../../service/CuentaService.php';
    require_once '../../model/Cuenta.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombres = $data->nombres;
        $apaterno = $data->aparteno;
        $ci = $data->ci;
        $celular = $data->celular;
        $tipocuenta = $data->tipocuenta;
        $ciudad = $data->ciudad;
        
        if($nombres != NULL && $celular != NULL && $ci != NULL && $tipocuenta != NULL && $ciudad != NULL){
            $cuentaService = new CuentaService();
            $cuenta = new Cuenta();
            $cuenta->setCi($ci);
            $cuenta->setCelular($celular);
            $cuenta->setNombres($nombres);
            $cuenta->setAparteno($apaterno);
            $cuenta->setTipoCuenta($tipocuenta);
            $cuenta->setCiudad($ciudad);
            echo json_encode($cuentaService->saveCuenta($cuenta));
        }
        else{
            echo json_encode("Datos Incorrectos");
        }
    } catch (Exception $ex) {
        echo json_encode('Entra por errores');
    }
?>

