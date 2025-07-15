<?php
    require_once 'Animal.php';

    abstract class Ave extends Animal {

        public function fazerNinho() {
            echo "Construiu um ninho! 🪺<br>";
        }

        abstract public function locomover();
        abstract public function alimentar();
        abstract public function emitirSom();
    }
?>
