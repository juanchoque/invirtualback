<?php
    require_once '../../service/TransaccionavisoService.php';
    require_once '../../model/Transaccionaviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $transaccionavisoService = new TransaccionavisoService();
            $transaccionaviso = new Transaccionaviso();
            $transaccionaviso->setId($id);
            echo $transaccionavisoService->deleteTransaccionaviso($transaccionaviso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

