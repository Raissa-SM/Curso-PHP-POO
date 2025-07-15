<?php
    require_once 'Animal.php';

    abstract class Peixe extends Animal {

        public function soltarBolha() {
            echo "Soltou uma bolha! 🫧<br>";
        }

        abstract public function locomover();
        abstract public function alimentar();
        abstract public function emitirSom();
    }
?>
