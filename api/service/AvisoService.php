<?php
    require_once 'database_connections.php';
    
    class AvisoService{
        function listAviso($buscar, $limit, $offset){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from aviso where estado = 'A' and UPPER(descripcion) LIKE UPPER(CONCAT('%','" . $buscar . "','%')) order by id desc ";
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
        
        //para lista de android
        function listAvisos($limit, $offset, $fecActualizacion){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from aviso where estado = 'A' and fec_modificacion >= '" . $fecActualizacion . "' order by id desc ";
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
        
        function cantAvisos(){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT count(id) as count from aviso";
            
            $result = $pdo->query($sql);
            Database::disconnect();

            $arr = 0;
            foreach ($result as $row) {
                $arr = $row['count'];
                break;
            }
            // Return json array containing data from the database
            return $arr;
        
        }
        
        function listAvisoM($cuenta, $buscar, $limit, $offset){
            
            // mysqli query to fetch all data from database
            $pdo = Database::connect();
            $sql = "SELECT * from aviso where cuenta = " . $cuenta . " and estado = 'A' and UPPER(descripcion) LIKE UPPER(CONCAT('%','" . $buscar . "','%')) order by id desc ";
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
        
        function saveAviso(Aviso $aviso){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $result = new Aviso();
            $result->idc = 0;
            
            //verify what
            try {
                $sql = "INSERT into aviso (titulo, descripcion,telefono, precio,latitud,longitud, transaccion_aviso,cuenta,tipo_aviso,imagen,direccion, sub_categoria, fec_modificacion) VALUES ('" .$aviso->getTitulo() ."','".$aviso->getDescripcion()."','".$aviso->getTelefono()."',".$aviso->getPrecio().",".$aviso->getLatitud().",".$aviso->getLongitud().",".$aviso->getTransaccionAviso().",".$aviso->getCuenta().",".$aviso->getTipoAviso().",'".$aviso->getImagen()."','".$aviso->getDireccion()."', 1,'" . $aviso->getFecModificacion() . "')";
                $q = $pdo->prepare($sql);
                $res = $q->execute();
                $result->idc = $pdo->lastInsertId();
            } catch (Exception $ex) {
                $result->idc = 0;
            }
                        
            Database::disconnect();
            return $result;
        }
        
        function updateAviso(Aviso $aviso){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $result = new Aviso();
            $result->idc = 0;
            try {
                $sql = "UPDATE aviso SET titulo = '".$aviso->getTitulo()."', descripcion = '".$aviso->getDescripcion()."', direccion = '".$aviso->getDireccion()."',telefono = '".$aviso->getTelefono()."',precio = ".$aviso->getPrecio().",imagen = '".$aviso->getImagen()."', transaccion_aviso = ".$aviso->getTransaccionAviso()." ,cuenta = ".$aviso->getCuenta().",tipo_aviso = ".$aviso->getTipoAviso().", fec_modificacion = '" . $aviso->getFecModificacion() . "', sub_categoria = 1 where id = " . $aviso->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
                $result->idc = $aviso->getId();
            } catch (Exception $ex) {
                $result->idc = 0;
            }
            Database::disconnect();
            return $result;
        }
        
        function deleteAviso(Aviso $aviso){
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $result = new Aviso();
            $result->idc = 0;
            try {
                $sql = "UPDATE aviso SET estado = 'X', fec_modificacion = '" . $aviso->getFecModificacion() . "' where id = ".$aviso->getId();
                $q = $pdo->prepare($sql);
                $res = $q->execute();
                $result->idc = $aviso->getId();
            } catch (Exception $ex) {
                $$result->idc = 0;
            }
            Database::disconnect();
            return $result;
        }

        public function getAviso(Aviso $aviso) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $aux = array();
            $raviso = NULL;
            try {
                $sql = "select * from aviso where titulo = '" . $aviso->getTitulo() . "' and descripcion = '" . $aviso->getDescripcion() . "' and telefono = '" . $aviso->getTelefono() . "' and latitud = " . $aviso->getLatitud() . " and longitud = " . $aviso->getLongitud() . " and precio = " . $aviso->getPrecio() . " and cuenta = " . $aviso->getCuenta() . " and tipo_aviso = " . $aviso->getTipoAviso() . " and transaccion_aviso = " . $aviso->getTransaccionAviso() . ";";
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
                $raviso = new Aviso();
                $raviso = $aux[0];
            }
            return $raviso;
        }

    }
?>

