<?php
    require_once 'Animal.php';

    abstract class Mamifero extends Animal {
        
        abstract public function locomover();
        abstract public function alimentar();
        abstract public function emitirSom();
    }
?>
