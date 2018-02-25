<?php
    require_once '../../service/PaisService.php';
    require_once '../../model/Pais.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
		$nombre1 = $data->nombre1;
		$nombre2 = $data->nombre2;
		$nombre3 = $data->nombre3;
        if($nombre != NULL){
            $paisService = new PaisService();
            $pais = new Pais();
            $pais->setNombre($nombre3);
            $pais->setOrden(1);
            //echo $paisService->savePais($pais);
            echo json_encode($nombre3);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

