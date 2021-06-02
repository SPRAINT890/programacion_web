<?php
    class TransporteTierra extends Transporte{
        private $ruedas;

        function __construct($largo, $ancho, $peso, $color, $capacidadCarga, $tipoCarga, $combustible, $recorrido, $medio, $tipo, $motor, $hp, $marca , $modelo, $velocidadMax, $ruedas){
            parent::__construct($largo, $ancho, $peso, $color, $capacidadCarga, $tipoCarga, $combustible, $recorrido, $medio, $tipo, $motor, $hp, $marca , $modelo, $velocidadMax);
            
            $this->ruedas = $ruedas;
        }
        
        public function getRuedas(){
                return $this->ruedas;
        }

        public function setRuedas($ruedas){
                $this->ruedas = $ruedas;

        }
    }
?>