<?php
    require_once '../../service/CategoriaService.php';
    require_once '../../model/Categoria.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        $nombre = $data->nombre;
        if($nombre != NULL && $id != NULL){
            $categoriaService = new CategoriaService();
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria->setNombre($nombre);
            echo $categoriaService->updateCategoria($categoria);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

