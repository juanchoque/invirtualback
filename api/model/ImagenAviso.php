<?php
  class ImagenAviso{
    private $id;
    private $nombre;
    private $link;
    private $estado;
    private $orden;
    private $aviso;
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getLink() {
        return $this->link;
    }

    function getEstado() {
        return $this->estado;
    }

    function getOrden() {
        return $this->orden;
    }

    function getAviso() {
        return $this->aviso;
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

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setOrden($orden) {
        $this->orden = $orden;
    }

    function setAviso($aviso) {
        $this->aviso = $aviso;
    }
    
  }  
?>

