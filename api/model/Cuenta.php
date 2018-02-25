<?php
  class Cuenta{
    public $id;
    public $nombres;
    public $aparteno;
    public $amaterno;
    private $usuario;
    private $clave;
    private $estado;
    private $fecRegistro;
    private $fecModificacion;
    private $latitud;
    private $longitud;
    private $observacion;
    private $link;
    private $fecFin;
    private $ci;
    private $direccion;
    private $telefono;
    public $celular;
    private $whatsapp;
    private $web;
    private $face;
    private $nombreEmpresa;
    private $telefonoEmpresa;
    private $direccionEmpresa;
    private $tipoCuenta;
    private $ciudad;
    private $avisoArray;
    
    function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getAparteno() {
        return $this->aparteno;
    }

    function getAmaterno() {
        return $this->amaterno;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
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

    function getLatitud() {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function getLink() {
        return $this->link;
    }

    function getFecFin() {
        return $this->fecFin;
    }

    function getCi() {
        return $this->ci;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCelular() {
        return $this->celular;
    }

    function getWhatsapp() {
        return $this->whatsapp;
    }

    function getWeb() {
        return $this->web;
    }

    function getFace() {
        return $this->face;
    }

    function getNombreEmpresa() {
        return $this->nombreEmpresa;
    }

    function getTelefonoEmpresa() {
        return $this->telefonoEmpresa;
    }

    function getDireccionEmpresa() {
        return $this->direccionEmpresa;
    }

    function getTipoCuenta() {
        return $this->tipoCuenta;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getAvisoArray() {
        return $this->avisoArray;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setAparteno($aparteno) {
        $this->aparteno = $aparteno;
    }

    function setAmaterno($amaterno) {
        $this->amaterno = $amaterno;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
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

    function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setFecFin($fecFin) {
        $this->fecFin = $fecFin;
    }

    function setCi($ci) {
        $this->ci = $ci;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setWhatsapp($whatsapp) {
        $this->whatsapp = $whatsapp;
    }

    function setWeb($web) {
        $this->web = $web;
    }

    function setFace($face) {
        $this->face = $face;
    }

    function setNombreEmpresa($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    function setTelefonoEmpresa($telefonoEmpresa) {
        $this->telefonoEmpresa = $telefonoEmpresa;
    }

    function setDireccionEmpresa($direccionEmpresa) {
        $this->direccionEmpresa = $direccionEmpresa;
    }

    function setTipoCuenta($tipoCuenta) {
        $this->tipoCuenta = $tipoCuenta;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setAvisoArray($avisoArray) {
        $this->avisoArray = $avisoArray;
    }
    
  }  
?>

