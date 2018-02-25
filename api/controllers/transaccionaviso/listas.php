<?php
    require_once '../../service/database_connections.php';
    
    try {
        // mysqli query to fetch all data from database
        $pdo = Database::connect();
        $sql = "SELECT * from transaccion_aviso where estado = 'A' order by id desc ";
        
        $result = $pdo->query($sql);
        Database::disconnect();

        $arr = Array();
        foreach ($result as $row) {
            $arr[] = $row;
        }

        // Return json array containing data from the database
        echo json_encode($arr);        
    } catch (Exception $ex) {
    }
    
?>