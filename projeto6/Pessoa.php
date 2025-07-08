<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo; //char (M ou F)

        public function getNome() {
            return $this -> nome;
        }
        private function setNome($n) {
            $this -> nome = $n;
        }
        private function getIdade() {
            return $this -> idade;
        }
        private function setIdade($i) {
            $this -> idade = $i;
        }
        private function getSexo() {
            switch ($this -> sexo) {
                case 'M':
                    return 'Masculino';
                case 'F':
                    return 'Feminino';
                default:
                    return 'Indefinido';
            }
        }
        private function setSexo($s) {
            $this -> sexo = strtoupper($s);
        }

        public function __construct($n, $i, $s) {
            $this -> setNome($n);
            $this -> setIdade($i);
            $this -> setSexo($s);
        }
        public function fazerAniver() {
            $this -> setIdade($this -> getIdade() + 1);
            echo "</br>" . $this -> getNome() . " completou " . $this -> getIdade() . " anos.</br>";
        }
    }
    
?>