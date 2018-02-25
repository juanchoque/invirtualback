<?php
    require_once '../../service/PermisoService.php';
    require_once '../../model/Permiso.php';
    
    $permisoService = new PermisoService();
    echo $permisoService->listPermiso('', 100, 0);
?>

