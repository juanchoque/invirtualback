<?php
    require_once '../../service/ImagenAvisoService.php';
    require_once '../../model/ImagenAviso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $imagenAvisoService = new ImagenAvisoService();
            $imagenAviso = new ImagenAviso();
            $imagenAviso->setId($id);
            echo $imagenAvisoService->deleteImagenAviso($imagenAviso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

