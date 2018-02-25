<?php
    require_once 'database_connections.php';
    
    class SubCategoriaService{
        function listSubCategoria($buscar, $limit, $offset){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from sub_categoria where estado = 'A' order by id desc ";
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
        
        function saveSubCategoria(SubCategoria $subCategoria){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "INSERT into sub_categoria (nombre, orden, categoria) VALUES ('".$subCategoria->getNombre()."','".$subCategoria->getOrden()."'," . $subCategoria->getCategoria() . ")";
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function updateSubCategoria(SubCategoria $subCategoria){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE sub_categoria SET nombre = '".$subCategoria->getNombre()."', orden = '".$subCategoria->getOrden()."', categoria = " . $subCategoria->getCategoria() . " where id = ".$subCategoria->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function deleteSubCategoria(SubCategoria $subCategoria){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE sub_categoria SET estado = 'X' where id = ".$subCategoria->getId();
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

