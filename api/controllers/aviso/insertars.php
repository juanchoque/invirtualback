<?php
    require_once '../../service/AvisoService.php';
    require_once '../../model/Aviso.php';
    require_once '../../model/Bitacora.php';
    //header('Content-Type: application/json');
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $avisoService = new AvisoService();
        $arr = Array();
        
        date_default_timezone_set('America/La_Paz');
        $fecActualizacion = date('Y-m-d H:i:s');
        
        foreach($data as $raviso){
            $operacion = $raviso->operacion;
            $idBean = $raviso->id;
            $idBitacora = $raviso->idBitacora;
            
            if($operacion == 1 || $operacion == 2){
                $titulo = $raviso->titulo;
                $descripcion = $raviso->descripcion;
                $precio = $raviso->precio;
                $latitud = $raviso->latitud;
                $longitud = $raviso->longitud;
                $telefono = $raviso->telefono;
                $imagen = $raviso->imagen;
                $direccion = $raviso->direccion;
                $transaccionaviso = $raviso->transaccionaviso;
                $cuenta = $raviso->cuenta;
                $tipoaviso = $raviso->tipoaviso;

                if($titulo != NULL && $descripcion != NULL && $precio != NULL && $transaccionaviso != NULL && $cuenta != NULL && $tipoaviso != NULL){
                    $aviso = new Aviso();

                    $aviso->setTitulo($titulo);
                    $aviso->setDescripcion($descripcion);
                    $aviso->setPrecio($precio);
                    $aviso->setLatitud($latitud);
                    $aviso->setLongitud($longitud);
                    $aviso->setTelefono($telefono);
                    $aviso->setImagen($imagen);
                    $aviso->setDireccion($direccion);
                    $aviso->setFecModificacion($fecActualizacion);

                    $aviso->setTransaccionAviso($transaccionaviso);
                    $aviso->setCuenta($cuenta);
                    $aviso->setTipoAviso($tipoaviso);

                    $bitacora = new Bitacora();
                                        
                    if($operacion == 1){
                        $raviso = $avisoService->getAviso($aviso);
                        $existeAviso = 0;   
                        if(is_array($raviso)){
                            $existeAviso = 1;
                        }
                        if($existeAviso == 0){
                            $result = $avisoService->saveAviso($aviso);
                            $bitacora->setIdc($result->idc);
                        }
                        $bitacora->setId($idBitacora);
                        $bitacora->setIdBean($idBean);
                        $bitacora->setOperacion(1);
                    }
                    else{                        
                        $id = $raviso->idc;
                        
                        $aviso->setId($id);
                        $aviso->setFecModificacion($fecActualizacion);
                        $result = $avisoService->updateAviso($aviso);
                        
                        $bitacora->setId($idBitacora);
                        $bitacora->setIdc($result->idc);
                        $bitacora->setIdBean($idBean);
                        $bitacora->setOperacion(2);
                    }
                    
                    array_push($arr, $bitacora);
                }
            }
            else if($operacion == 3){
                $id = $raviso->idc;
                if($id != NULL){
                    $aviso = new Aviso();
                    $aviso->setId($id);
                    $aviso->setFecModificacion($fecActualizacion);
                    
                    $result = $avisoService->deleteAviso($aviso);
                    
                    $bitacora = new Bitacora();
                    $bitacora->setId($idBitacora);
                    $bitacora->setIdc($result->idc);
                    $bitacora->setIdBean($idBean);
                    $bitacora->setOperacion(3);

                    array_push($arr, $bitacora);
                }
            }
        }
        
        echo json_encode($arr);
        
    } catch (Exception $ex) {
        echo json_encode($ex);
    }
?>

