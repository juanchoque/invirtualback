<?php
    require_once '../../service/CuentaService.php';
    require_once '../../model/Cuenta.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombres = $data->nombres;
        $apaterno = $data->aparteno;
        $amaterno = $data->amaterno;
        $celular = $data->telefono;
        if($nombres != NULL && $celular != NULL){
            $cuentaService = new CuentaService();
            $cuenta = new Cuenta();
            $cuenta->setCelular($celular);
            $cuenta->setNombres($nombres);
            $cuenta->setAparteno($apaterno);
            $cuenta->setAmaterno($amaterno);
            
            $rcuenta = $cuentaService->obtenerCuenta($cuenta);
            //echo '>>' . $rcuenta['telefono'];
            $exiteCuenta = 0;
            if(is_array($rcuenta)){
                if($rcuenta['celular'] != NULL){
                    $exiteCuenta = 1;
                }
            }
            if($exiteCuenta == 1){
                $cuenta->setId($rcuenta['id']);
                echo json_encode($cuentaService->updateCuenta($cuenta));
            }
            else{
                echo json_encode($cuentaService->saveCuenta($cuenta));
            }
        }
        else{
            $cuenta = new Cuenta();
            $cuenta->setId(0);
            echo json_encode($cuenta);
        }
    } catch (Exception $ex) {
        echo json_encode('Entra por errores');
    }
?>

