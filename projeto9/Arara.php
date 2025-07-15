<?php
    require_once 'Ave.php';

    class Arara extends Ave {
        public function __construct() {
            $this -> setNome('Arara');
            $this -> setPeso(5);
            $this -> setIdade(7);
            $this -> setCor('Laranja');
        }
        
        public function locomover() {
            echo "Voando alto! 🦜<br>";
        }

        public function alimentar() {
            echo "Comendo frutas<br>";
        }

        public function emitirSom() {
            echo "Gritando: ARRAAAAA!<br>";
        }
    }
?>
