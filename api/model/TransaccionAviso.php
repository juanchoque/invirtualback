<?php
  class TransaccionAviso{
    private $id;
    private $nombre;
    private $estado;
    private $avisoArray;
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEstado() {
        return $this->estado;
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

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setAvisoArray($avisoArray) {
        $this->avisoArray = $avisoArray;
    }
    
  }  
?>

