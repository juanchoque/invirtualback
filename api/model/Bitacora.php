<?php
    class Bitacora{
        public $id;
        private $imei;
        private $fecActualizacion;
        public $idBean;
        public $operacion;
        private $estado;
        public $idc;
        
        function getIdc() {
            return $this->idc;
        }

        function setIdc($idc) {
            $this->idc = $idc;
        }

        
                
        function getId() {
            return $this->id;
        }

        function getImei() {
            return $this->imei;
        }

        function getFecActualizacion() {
            return $this->fecActualizacion;
        }

        function getIdBean() {
            return $this->idBean;
        }

        function getOperacion() {
            return $this->operacion;
        }

        function getEstado() {
            return $this->estado;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setImei($imei) {
            $this->imei = $imei;
        }

        function setFecActualizacion($fecActualizacion) {
            $this->fecActualizacion = $fecActualizacion;
        }

        function setIdBean($idBean) {
            $this->idBean = $idBean;
        }

        function setOperacion($operacion) {
            $this->operacion = $operacion;
        }

        function setEstado($estado) {
            $this->estado = $estado;
        }
        
    }
?>