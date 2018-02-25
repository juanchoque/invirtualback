<?php
    require_once '../../service/SubCategoriaService.php';
    require_once '../../model/SubCategoria.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        $categoria = $data->categoria;
        if($nombre != NULL && $categoria != NULL){
            $subCategoriaService = new SubCategoriaService();
            $subCategoria = new SubCategoria();
            $subCategoria->setNombre($nombre);
            $subCategoria->setCategoria($categoria);
            $subCategoria->setOrden(1);
            echo $subCategoriaService->saveSubCategoria($subCategoria);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

