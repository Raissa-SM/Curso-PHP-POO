<?php
    require_once 'Reptil.php';

    class Cobra extends Reptil {
        public function __construct() {
            $this -> setNome('Cobra');
            $this -> setPeso(5);
            $this -> setIdade(7);
            $this -> setCor('Preto');
        }
        public function locomover() {
            echo "Rastejando como cobra 🐍<br>";
        }

        public function alimentar() {
            echo "Engolindo presa<br>";
        }

        public function emitirSom() {
            echo "Sibilando: sssss<br>";
        }
    }
?>
