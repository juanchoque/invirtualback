<?php
    require_once '../../service/TransaccionavisoService.php';
    require_once '../../model/Transaccionaviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombre = $data->nombre;
        if($nombre != NULL && $id != NULL){
            $transaccionavisoService = new TransaccionavisoService();
            $transaccionaviso = new Transaccionaviso();
            $transaccionaviso->setId($id);
            $transaccionaviso->setNombre($nombre);
            echo $transaccionavisoService->updateTransaccionaviso($transaccionaviso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

