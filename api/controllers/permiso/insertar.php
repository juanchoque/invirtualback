<?php
    require_once '../../service/PermisoService.php';
    require_once '../../model/Permiso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $nombre = $data->nombre;
        if($nombre != NULL){
            $permisoService = new PermisoService();
            $permiso = new Permiso();
            $permiso->setNombre($nombre);
            $permiso->setOrden(1);
            echo $permisoService->savePermiso($permiso);            
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

