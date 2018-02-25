<?php
  class Permiso{
    private $id;
    private $nombre;
    private $link;
    private $imagen;
    private $estado;
    private $orden;
    private $tipoCuentaPermisoArray;   
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getLink() {
        return $this->link;
    }

    function getImagen() {
        return $this->imagen;
    }

    function getEstado() {
        return $this->estado;
    }

    function getOrden() {
        return $this->orden;
    }

    function getTipoCuentaPermisoArray() {
        return $this->tipoCuentaPermisoArray;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setOrden($orden) {
        $this->orden = $orden;
    }

    function setTipoCuentaPermisoArray($tipoCuentaPermisoArray) {
        $this->tipoCuentaPermisoArray = $tipoCuentaPermisoArray;
    }
    
  }  
?>

