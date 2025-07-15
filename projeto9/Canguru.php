<?php
    require_once 'Mamifero.php';

    class Canguru extends Mamifero {
        public function __construct() {
            $this -> setNome('Canguru');
            $this -> setPeso(80);
            $this -> setIdade(10);
            $this -> setCor('Marrom');
        }
        public function locomover() {
            echo "Saltando como canguru 🦘<br>";
        }

        public function alimentar() {
            echo "Mamando leite<br>";
        }

        public function emitirSom() {
            echo "Som de canguru<br>";
        }

        public function usarBolsa() {
            echo "Usando a bolsa marsupial<br>";
        }
    }
?>
