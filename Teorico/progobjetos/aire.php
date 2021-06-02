<?php
    class Aire extends Transporte{
        private $tipoFuselaje;
        private $trenAterrizaje;
        private $sensores;

        function __construct($largo, $ancho, $peso, $color, $capacidadCarga, $tipoCarga, $combustible, $recorrido, $medio, $tipo, $motor, $hp, $marca , $modelo, $velocidadMax, $tipoFuselaje, $trenAterrizaje, $sensores){
            parent::__construct($largo, $ancho, $peso, $color, $capacidadCarga, $tipoCarga, $combustible, $recorrido, $medio, $tipo, $motor, $hp, $marca , $modelo, $velocidadMax);
            
            $this->tipoFuselaje     = $tipoFuselaje;
            $this->trenAterrizaje   = $trenAterrizaje;
            $this->sensores         = $sensores;
        }



        public function getTipoFuselaje(){
                return $this->tipoFuselaje;
        }

        public function setTipoFuselaje($tipoFuselaje){
                $this->tipoFuselaje = $tipoFuselaje;

        }

        public function getTrenAterrizaje(){
                return $this->trenAterrizaje;
        }

        public function setTrenAterrizaje($trenAterrizaje){
                $this->trenAterrizaje = $trenAterrizaje;

        }

        public function getSensores(){
                return $this->sensores;
        }

        public function setSensores($sensores){
                $this->sensores = $sensores;

        }
    }

?>