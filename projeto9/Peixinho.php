<?php
    require_once 'Peixe.php';

    class Peixinho extends Peixe {
        public function __construct() {
            $this -> setNome('Peixe');
            $this -> setPeso(3);
            $this -> setIdade(3);
            $this -> setCor('Preto');
        }
        public function locomover() {
            echo "Nadando rapidinho 🐠<br>";
        }

        public function alimentar() {
            echo "Comendo ração de peixe<br>";
        }

        public function emitirSom() {
            echo "Peixinho não faz som perceptível<br>";
        }
    }
?>
