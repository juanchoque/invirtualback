<?php
  class TipoCuentaPermiso{
    private $id;
    private $tipoCuenta;
    private $permiso;
    function getId() {
        return $this->id;
    }

    function getTipoCuenta() {
        return $this->tipoCuenta;
    }

    function getPermiso() {
        return $this->permiso;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipoCuenta($tipoCuenta) {
        $this->tipoCuenta = $tipoCuenta;
    }

    function setPermiso($permiso) {
        $this->permiso = $permiso;
    }
    
  }  
?>

