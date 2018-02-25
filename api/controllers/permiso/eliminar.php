<?php
    require_once '../../service/PermisoService.php';
    require_once '../../model/Permiso.php';
    
    $data = json_decode(file_get_contents("php://input"));
    
    try {
        $id = $data->id;
        if($id != NULL){
            $permisoService = new PermisoService();
            $permiso = new Permiso();
            $permiso->setId($id);
            echo $permisoService->deletePermiso($permiso);
        }
        else{
            echo "Datos Incorrectos";
        }
    } catch (Exception $ex) {
        echo 'Entra por errores';
    }
?>

