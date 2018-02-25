<?php
    require_once 'database_connections.php';
    
    class CuentaService{
        function listCuenta($buscar, $limit, $offset){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from cuenta where estado = 'A' order by id desc ";
            $sqllimit = " ";
            $sqloffset = "offset ".$offset;
            
            if($limit > 0){
                $sqllimit = "limit ".$limit." ";
            }
            $sql = $sql.$sqllimit.$sqloffset;
            $result = $pdo->query($sql);
            Database::disconnect();

            $arr = Array();
            foreach ($result as $row) {
                $arr[] = $row;
            }

            // Return json array containing data from the database
            return json_encode($arr);
        
        }
        
        function saveCuenta(Cuenta $cuenta){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $LAST_ID = 1;//por defecto
            try {
                $sql = "INSERT into cuenta (celular, tipo_cuenta, ciudad, nombres, aparteno, amaterno) VALUES ('" .$cuenta->getCelular() ."',1,1,'".$cuenta->getNombres()."','".$cuenta->getAparteno()."','" . $cuenta->getAmaterno() . "')";
                $q = $pdo->prepare($sql);
                $res = $q->execute();
                
                $LAST_ID = $pdo->lastInsertId();
            } catch (Exception $ex) {
                $LAST_ID = 1;
            }
            Database::disconnect();
            
            $cuenta->setId($LAST_ID);
            return $cuenta;
        }
        
        function updateCuenta(Cuenta $cuenta){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
                $sql = "UPDATE cuenta SET nombres = '".$cuenta->getNombres()."', aparteno = '".$cuenta->getAparteno()."', amaterno = '".$cuenta->getAmaterno()."' where id = ".$cuenta->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                
            }
            Database::disconnect();
            return $cuenta;
        }
        
        function deleteCuenta(Cuenta $cuenta){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE cuenta SET estado = 'X' where id = ".$cuenta->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function obtenerCuenta(Cuenta $cuenta){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $aux = array();
            $rcuenta = new Cuenta();
            $rid = 0;
            try {
                $sql = "SELECT * from cuenta WHERE estado <> 'X' and celular = '" . $cuenta->getCelular() . "' order by id desc limit 1";
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
                $rcuenta = $aux[0];
            }
            
            //echo json_encode($rcuenta);
            return $rcuenta;
        }
    }
?>

