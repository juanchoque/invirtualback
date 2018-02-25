<?php
    require_once 'database_connections.php';
    
    class ImagenAvisoService{
        function listImagenAviso($buscar, $limit, $offset){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from imagen_aviso where estado = 'A' order by id desc ";
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
        
        function saveImagenAviso(ImagenAviso $imagenAviso){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "INSERT into imagen_aviso (nombre, orden) VALUES ('".$imagenAviso->getNombre()."','".$imagenAviso->getOrden()."')";
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function updateImagenAviso(ImagenAviso $imagenAviso){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE imagen_aviso SET nombre = '".$imagenAviso->getNombre()."', orden = '".$imagenAviso->getOrden()."' where id = ".$imagenAviso->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
            } catch (Exception $ex) {
                $result = false;
            }
            Database::disconnect();
            return $result;
        }
        
        function deleteImagenAviso(ImagenAviso $imagenAviso){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $result = true;
            try {
                $sql = "UPDATE imagen_aviso SET estado = 'X' where id = ".$imagenAviso->getId();
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

