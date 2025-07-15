<?php
    require_once 'Mamifero.php';

    class Cachorro extends Mamifero {
        public function __construct() {
            $this -> setNome('Cachorro');
            $this -> setPeso(20);
            $this -> setIdade(7);
            $this -> setCor('Preto');
        }
        public function locomover() {
            echo "Correndo com quatro patas 🐕<br>";
        }

        public function alimentar() {
            echo "Comendo ração<br>";
        }

        public function emitirSom() {
            echo "Latindo: au au!<br>";
        }

        public function enterrarOsso() {
            echo "Enterrou um osso 🦴<br>";
        }

        public function abanarRabo() {
            echo "Abanando o rabo 🐾<br>";
        }
    }
?>
