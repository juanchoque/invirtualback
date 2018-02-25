<?php
  class SubCategoria{
    private $id;
    private $nombre;
    private $orden;
    private $estado;
    private $imagen;
    private $fecRegistro;
    private $fecModificacion;
    private $latitud;
    private $longitud;
    private $categoria;
    private $avisoArray;
    
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

    function getImagen() {
        return $this->imagen;
    }

    function getFecRegistro() {
        return $this->fecRegistro;
    }

    function getFecModificacion() {
        return $this->fecModificacion;
    }

    function getLatitud() {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getAvisoArray() {
        return $this->avisoArray;
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

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    function setFecRegistro($fecRegistro) {
        $this->fecRegistro = $fecRegistro;
    }

    function setFecModificacion($fecModificacion) {
        $this->fecModificacion = $fecModificacion;
    }

    function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setAvisoArray($avisoArray) {
        $this->avisoArray = $avisoArray;
    }
    
  }  
?>

