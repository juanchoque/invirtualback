<?php
    require_once '../../service/AvisoService.php';
    require_once '../../service/BitacoraService.php';
    require_once '../../model/Aviso.php';
    require_once '../../model/Bitacora.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $telefono = $data->telefono;
        
        $avisoService = new AvisoService();
        $bitacoraService = new BitacoraService();
        
        date_default_timezone_set('America/La_Paz');
        $fecActualizacion = date('Y-m-d H:i:s');
        
        //recuperar valor de vitacora
        
        $bitacora = $bitacoraService->obtenerBitacora($telefono, 1);//1 = avisos, 2 = tipo aviso,3 = tipo de transaccion
        if(!is_array($bitacora)){
            $nbitacora = new Bitacora();
            $nbitacora->setImei($telefono);
            $nbitacora->setFecActualizacion($fecActualizacion);
            $nbitacora->setOperacion(1);
            
            $bitacoraService->saveBitacora($nbitacora);
            
            /*$rraviso = $avisoService->getFist();
            if($bitacora != NULL){
                $fecActualizacion = $rraviso['fec_modificacion'];
            }*/
        }
        else{
            $ubitacora = new Bitacora();
            $ubitacora->setId($bitacora['id']);
            $ubitacora->setImei($bitacora['imei']);
            $ubitacora->setOperacion(1);
            $ubitacora->setFecActualizacion($fecActualizacion);
            
            $bitacoraService->updateBitacora($ubitacora);
            
            $fecActualizacion = $bitacora['fec_actualizacion'];
        }
        
        echo $avisoService->listAvisos(100, 0, $fecActualizacion);
        
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
?>

