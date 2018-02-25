<?php
    require_once '../../service/SubCategoriaService.php';
    require_once '../../model/SubCategoria.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombre = $data->nombre;
        $categoria = $data->categoria;
        if($nombre != NULL && $id != NULL && $categoria != NULL){
            $subCategoriaService = new SubCategoriaService();
            $subCategoria = new SubCategoria();
            $subCategoria->setId($id);
            $subCategoria->setCategoria($categoria);
            $subCategoria->setNombre($nombre);
            echo $subCategoriaService->updateSubCategoria($subCategoria);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

