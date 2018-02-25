<?php
    class Aviso{
        private $id;
        private $titulo;
        private $descripcion;
        private $orden;
        private $estado;
        private $telefono;
        private $empresap;
        private $latitud;
        private $longitud;
        private $web;
        private $wat;
        private $face;
        private $publicado;
        private $promocion;
        private $precio;
        private $comision;
        private $fecPublicacion;
        private $fecRegistro;
        private $fecModificacion;
        private $fecFinPublicacion;
        private $imagenAvisoArray;
        private $cuenta;
        private $subCategoria;
        private $tipoAviso;
        private $transaccionAviso;
        private $imagen;
	private $direccion;
        
        public $idc;
       
        function getId() {
            return $this->id;
        }
        function getImagen() {
            return $this->imagen;
        }

        function setImagen($imagen) {
            $this->imagen = $imagen;
        }
		
		function getDireccion() {
            return $this->direccion;
        }

        function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function getOrden() {
            return $this->orden;
        }

        function getEstado() {
            return $this->estado;
        }

        function getTelefono() {
            return $this->telefono;
        }

        function getEmpresap() {
            return $this->empresap;
        }

        function getLatitud() {
            return $this->latitud;
        }

        function getLongitud() {
            return $this->longitud;
        }

        function getWeb() {
            return $this->web;
        }

        function getWat() {
            return $this->wat;
        }

        function getFace() {
            return $this->face;
        }

        function getPublicado() {
            return $this->publicado;
        }

        function getPromocion() {
            return $this->promocion;
        }

        function getPrecio() {
            return $this->precio;
        }

        function getComision() {
            return $this->comision;
        }

        function getFecPublicacion() {
            return $this->fecPublicacion;
        }

        function getFecRegistro() {
            return $this->fecRegistro;
        }

        function getFecModificacion() {
            return $this->fecModificacion;
        }

        function getFecFinPublicacion() {
            return $this->fecFinPublicacion;
        }

        function getImagenAvisoArray() {
            return $this->imagenAvisoArray;
        }

        function getCuenta() {
            return $this->cuenta;
        }

        function getSubCategoria() {
            return $this->subCategoria;
        }

        function getTipoAviso() {
            return $this->tipoAviso;
        }

        function getTransaccionAviso() {
            return $this->transaccionAviso;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setOrden($orden) {
            $this->orden = $orden;
        }

        function setEstado($estado) {
            $this->estado = $estado;
        }

        function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        function setEmpresap($empresap) {
            $this->empresap = $empresap;
        }

        function setLatitud($latitud) {
            $this->latitud = $latitud;
        }

        function setLongitud($longitud) {
            $this->longitud = $longitud;
        }

        function setWeb($web) {
            $this->web = $web;
        }

        function setWat($wat) {
            $this->wat = $wat;
        }

        function setFace($face) {
            $this->face = $face;
        }

        function setPublicado($publicado) {
            $this->publicado = $publicado;
        }

        function setPromocion($promocion) {
            $this->promocion = $promocion;
        }

        function setPrecio($precio) {
            $this->precio = $precio;
        }

        function setComision($comision) {
            $this->comision = $comision;
        }

        function setFecPublicacion($fecPublicacion) {
            $this->fecPublicacion = $fecPublicacion;
        }

        function setFecRegistro($fecRegistro) {
            $this->fecRegistro = $fecRegistro;
        }

        function setFecModificacion($fecModificacion) {
            $this->fecModificacion = $fecModificacion;
        }

        function setFecFinPublicacion($fecFinPublicacion) {
            $this->fecFinPublicacion = $fecFinPublicacion;
        }

        function setImagenAvisoArray($imagenAvisoArray) {
            $this->imagenAvisoArray = $imagenAvisoArray;
        }

        function setCuenta($cuenta) {
            $this->cuenta = $cuenta;
        }

        function setSubCategoria($subCategoria) {
            $this->subCategoria = $subCategoria;
        }

        function setTipoAviso($tipoAviso) {
            $this->tipoAviso = $tipoAviso;
        }

        function setTransaccionAviso($transaccionAviso) {
            $this->transaccionAviso = $transaccionAviso;
        }
    }
?>