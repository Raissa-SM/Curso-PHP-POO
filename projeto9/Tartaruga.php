<?php
    require_once 'Reptil.php';

    class Tartaruga extends Reptil {
        public function __construct() {
            $this -> setNome('Tartaruga');
            $this -> setPeso(50);
            $this -> setIdade(12);
            $this -> setCor('Marrom');
        }
        public function locomover() {
            echo "Andando beeem devagar 🐢<br>";
        }

        public function alimentar() {
            echo "Comendo vegetais<br>";
        }

        public function emitirSom() {
            echo "Som de tartaruga (quase nenhum 😅)<br>";
        }
    }
?>
