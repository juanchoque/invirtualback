<?php
    require_once 'database_connections.php';
    
    class BitacoraService{
        
        function saveBitacora(Bitacora $bitacora){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "insert into bitacora(imei, fec_actualizacion, operacion) values ('" . $bitacora->getImei() . "','" . $bitacora->getFecActualizacion() . "', " . $bitacora->getOperacion() . ")";
                $q = $pdo->prepare($sql); 
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function updateBitacora(Bitacora $bitacora){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "update bitacora set imei = '" . $bitacora->getImei() . "',fec_actualizacion = '" . $bitacora->getFecActualizacion() . "', operacion = " . $bitacora->getOperacion() . " where id = " . $bitacora->getId();
                $q = $pdo->prepare($sql); 
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function obtenerBitacora($telefono, $operacion){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $aux = array();
            $rbitacora = new Bitacora();
            try {
                $sql = "SELECT * from bitacora WHERE imei = '" . $telefono . "' and operacion = " . $operacion;
                $result = $pdo->query($sql);
                
                foreach ($result as $row) {
                    $aux[] = $row;
                    break;
                }
            } catch (Exception $ex) {
                $aux = array();
            }
            Database::disconnect();
            
            if(count($aux) > 0){
                $rbitacora = $aux[0];
            }
            return $rbitacora;
        }
        
    }
?>

