<?php
    require_once 'database_connections.php';
    
    class CategoriaService{
        function listCategoria($buscar, $limit, $offset){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from categoria where estado = 'A' order by id desc ";
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
        
        function saveCategoria(Categoria $categoria){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "INSERT into categoria (nombre, orden) VALUES ('".$categoria->getNombre()."','".$categoria->getOrden()."')";
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function updateCategoria(Categoria $categoria){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE categoria SET nombre = '".$categoria->getNombre()."', orden = '".$categoria->getOrden()."' where id = ".$categoria->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function deleteCategoria(Categoria $categoria){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE categoria SET estado = 'X' where id = ".$categoria->getId();
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

