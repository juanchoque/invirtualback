<?php
    require_once '../../service/database_connections.php';
    
    try {
        // mysqli query to fetch all data from database
        $pdo = Database::connect();
        $sql = "SELECT * from tipo_aviso where estado = 'A' order by id desc ";
        
        $result = $pdo->query($sql);
        Database::disconnect();

        $arr = Array();
        $cont = 0;
        foreach ($result as $row) {
            $arr[] = $row;
        }

        // Return json array containing data from the database
        echo json_encode($arr);
        
    } catch (Exception $ex) {
    }
    
?>

