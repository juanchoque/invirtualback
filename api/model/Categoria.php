<?php
  class Categoria{
    private $id;
    private $nombre;
    private $orden;
    private $estado;
    private $empresa;
    private $imagen;
    private $fecRegistro;
    private $fecModificacion;
    private $subCategoriaArray;
    
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

    function getEmpresa() {
        return $this->empresa;
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

    function getSubCategoriaArray() {
        return $this->subCategoriaArray;
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

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
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

    function setSubCategoriaArray($subCategoriaArray) {
        $this->subCategoriaArray = $subCategoriaArray;
    }

  }  
?>

