<?php
        session_start();

        require_once '../../service/CuentaService.php';
        require_once '../../model/Cuenta.php';
        //header('Content-Type: application/json');
        $data = json_decode(file_get_contents("php://input"));
        
        try {
            $celular = $data->celular;
            $cuentaService = new CuentaService();
            $cuenta = new Cuenta();
            $cuenta->setCelular($celular);
            
            echo json_encode($cuentaService->obtenerCuenta($cuenta));
        } catch (Exception $exc) {
            $cuenta = new Cuenta();
            echo json_encode($cuenta);
        }
?>