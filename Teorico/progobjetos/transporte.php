<?php
    abstract class Transporte{
        
        //declaracion de una propiedad
        private $largo;
        private $ancho;
        private $peso;
        private $color;
        private $capacidadCarga;
        private $tipoCarga;
        private $combustible;
        private $recorrido;
        private $medio;
        private $tipo;
        private $motor;
        private $hp;
        private $marca;
        private $modelo;
        private $velocidadMax;

        function __construct($largo, $ancho, $peso, $color, $capacidadCarga, $tipoCarga, $combustible, $recorrido, $medio, $tipo, $motor, $hp, $marca , $modelo, $velocidadMax){
           
            $this->largo            = $largo;
            $this->ancho            = $ancho;
            $this->peso             = $peso;
            $this->color            = $color;
            $this->capacidadcarga   = $capacidadCarga;
            $this->tipocarga        = $tipoCarga;
            $this->combustible      = $combustible;
            $this->recorrido        = $recorrido;
            $this->medio            = $medio;
            $this->tipo             = $tipo;
            $this->motor            = $motor;
            $this->hp               = $hp;
            $this->marca            = $marca;
            $this->modelo           = $modelo;
            $this->velocidadMax     = $velocidadMax;
        }

        public function getLargo(){
                return $this->largo;
        }

        public function setLargo($largo){
                $this->largo = $largo;
        }

        public function getAncho(){
                return $this->ancho;
        }

        public function setAncho($ancho){
                $this->ancho = $ancho;

        }

        public function getPeso(){
                return $this->peso;
        }

        public function setPeso($peso){
                $this->peso = $peso;

        }

        public function getColor(){
                return $this->color;
        }

        public function setColor($color){
                $this->color = $color;
        }

        public function getCapacidadCarga(){
                return $this->capacidadCarga;
        }

        public function setCapacidadCarga($capacidadCarga){
                $this->capacidadCarga = $capacidadCarga;

        }

        public function getTipoCarga(){
                return $this->tipoCarga;
        }

        public function setTipoCarga($tipoCarga){
                $this->tipoCarga = $tipoCarga;
        }

        public function getCombustible(){
                return $this->combustible;
        }

        public function setCombustible($combustible){
                $this->combustible = $combustible;

        }

        public function getRecorrido(){
                return $this->recorrido;
        }

        public function setRecorrido($recorrido){
                $this->recorrido = $recorrido;

        }

        public function getMedio(){
                return $this->medio;
        }

        public function setMedio($medio){
                $this->medio = $medio;

        }

        public function getTipo(){
                return $this->tipo;
        }

        public function setTipo($tipo){
                $this->tipo = $tipo;

        }

        public function getMotor(){
                return $this->motor;
        }

        public function setMotor($motor){
                $this->motor = $motor;

        }

        public function getHp(){
                return $this->hp;
        }

        public function setHp($hp){
                $this->hp = $hp;

        }

        public function getVelocidadMax(){
                return $this->velocidadMax;
        }

        public function setVelocidadMax($velocidadMax){
                $this->velocidadMax = $velocidadMax;

        }

        public function getMarca(){
                return $this->marca;
        }

        public function setMarca($marca){
                $this->marca = $marca;

        }

        public function getModelo(){
                return $this->modelo;
        }

        public function setModelo($modelo){
                $this->modelo = $modelo;

        }
    }
?>