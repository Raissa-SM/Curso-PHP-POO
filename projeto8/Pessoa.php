<?php
    abstract class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        public final function fazerAniv() {
            $this -> idade ++;
            echo "</br>Agora " . $this -> getNome() . " tem " . $this -> getIdade() . " anos.</br>";
        }
        public function __construct($no, $id, $se) {
            $this -> setNome($no);
            $this -> setIdade($id);
            $this -> setSexo($se);
        }
        public function info(){
            echo "<div class='info'><h2>" . $this -> getNome() . "</h2>";
            echo "Idade: " . $this -> getIdade();
            echo "<br/>Sexo: " . $this -> getSexo() . "</div>";
        }
        
        // Getters e Setters protegidos
        protected function getNome() {
            return $this -> nome;
        }
        protected function setNome($no) {
            $this -> nome = $no;
        }
        protected function getIdade() {
            return $this -> idade;
        }
        protected function setIdade($id) {
            $this -> idade = $id;
        }
        protected function getSexo() {
            return $this -> sexo;
        }
        protected function setSexo($se) {
            $this -> sexo = $se;
        }
    }
?>