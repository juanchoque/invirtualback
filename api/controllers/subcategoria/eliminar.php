<?php
    require_once '../../service/SubCategoriaService.php';
    require_once '../../model/SubCategoria.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $subCategoriaService = new SubCategoriaService();
            $subCategoria = new SubCategoria();
            $subCategoria->setId($id);
            echo $subCategoriaService->deleteSubCategoria($subCategoria);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

