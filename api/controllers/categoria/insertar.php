<?php
    require_once '../../service/CategoriaService.php';
    require_once '../../model/Categoria.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        if($nombre != NULL){
            $categoriaService = new CategoriaService();
            $categoria = new Categoria();
            $categoria->setNombre($nombre);
            $categoria->setOrden(1);
            echo $categoriaService->saveCategoria($categoria);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

