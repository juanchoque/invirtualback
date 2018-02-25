<?php
    require_once '../../service/TransaccionavisoService.php';
    require_once '../../model/Transaccionaviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        if($nombre != NULL){
            $transaccionavisoService = new TransaccionavisoService();
            $transaccionaviso = new Transaccionaviso();
            $transaccionaviso->setNombre($nombre);
            echo $transaccionavisoService->saveTransaccionaviso($transaccionaviso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

