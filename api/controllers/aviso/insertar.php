<?php
    require_once '../../service/AvisoService.php';
    require_once '../../model/Aviso.php';
    //header('Content-Type: application/json');
    $data = json_decode(file_get_contents("php://input"));
    
    try {
    	$titulo = $data->titulo;
        $descripcion = $data->descripcion;
        $precio = $data->precio;
        $latitud = $data->latitud;
        $longitud = $data->longitud;
        $telefono = $data->telefono;
        $imagen = $data->imagen;
		$direccion = $data->direccion;
        
        $transaccionaviso = $data->transaccionaviso;
        $cuenta = $data->cuenta;
        $subcategoria = $data->subcategoria;
        $tipoaviso = $data->tipoaviso;
                
        if($titulo != NULL && $descripcion != NULL && $precio != NULL && $transaccionaviso != NULL && $cuenta != NULL && $subcategoria != NULL  && $tipoaviso != NULL){
            $avisoService = new AvisoService();
            $aviso = new Aviso();
            $aviso->setTitulo($titulo);
            $aviso->setDescripcion($descripcion);
            $aviso->setPrecio($precio);
            $aviso->setLatitud($latitud);
            $aviso->setLongitud($longitud);
            $aviso->setTelefono($telefono);
            $aviso->setImagen($imagen);
			$aviso->setDireccion($direccion);

            $aviso->setTransaccionAviso($transaccionaviso);
            $aviso->setCuenta($cuenta);
            $aviso->setSubCategoria($subcategoria);
            $aviso->setTipoAviso($tipoaviso);
            echo json_encode($avisoService->saveAviso($aviso));
        }
        else{
            echo json_encode("Datos Incorrectos");
        }
    } catch (Exception $ex) {
        echo json_encode($ex);
    }
?>

