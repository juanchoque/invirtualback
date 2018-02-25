<?php
    require_once 'database_connections.php';
    
    class CiudadService{
        function listCiudad($buscar, $limit, $offset){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from ciudad where estado = 'A' order by id desc ";
            $sqllimit = " ";
            $sqloffset = "offset ".$offset;
            
            if($limit > 0){
                $sqllimit = "limit ".$limit." ";
            }
            $sql = $sql.$sqllimit.$sqloffset;
            $result = $pdo->query($sql);
            Database::disconnect();

            $arr = Array();
            $cont = 0;
            foreach ($result as $row) {
                $arr[] = $row;
            }

            // Return json array containing data from the database
            return json_encode($arr);
        
        }
        
        function saveCiudad(Ciudad $ciudad){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "INSERT into ciudad (nombre, orden, pais) VALUES ('".$ciudad->getNombre()."','".$ciudad->getOrden()."','" . $ciudad->getPais() . "')";
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function updateCiudad(Ciudad $ciudad){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE ciudad SET nombre = '".$ciudad->getNombre()."', orden = '".$ciudad->getOrden()."', pais = " . $ciudad->getPais() . " where id = ".$ciudad->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function deleteCiudad(Ciudad $ciudad){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE ciudad SET estado = 'X' where id = ".$ciudad->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
    }
?>

