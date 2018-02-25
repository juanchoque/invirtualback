<?php
    require_once '../../service/ImagenAvisoService.php';
    require_once '../../model/ImagenAviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        $aviso = $data->aviso;
        if($nombre != NULL && $aviso != NULL){
            $imagenAvisoService = new ImagenAvisoService();
            $imagenAviso = new ImagenAviso();
            $imagenAviso->setNombre($nombre);
            $imagenAviso->setAviso($aviso);
            echo $imagenAvisoService->saveImagenAviso($imagenAviso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

