<?php
  class Pais{
    private $id;
    private $nombre;
    private $orden;
    private $estado;
    private $fecRegistro;
    private $fecModificacion;
    private $ciudadArray;

    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getOrden() {
        return $this->orden;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecRegistro() {
        return $this->fecRegistro;
    }

    function getFecModificacion() {
        return $this->fecModificacion;
    }

    function getCiudadArray() {
        return $this->ciudadArray;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setOrden($orden) {
        $this->orden = $orden;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFecRegistro($fecRegistro) {
        $this->fecRegistro = $fecRegistro;
    }

    function setFecModificacion($fecModificacion) {
        $this->fecModificacion = $fecModificacion;
    }

    function setCiudadArray($ciudadArray) {
        $this->ciudadArray = $ciudadArray;
    }
    
  }  
?>

