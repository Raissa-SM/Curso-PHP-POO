<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniv() {
            $this -> setIdade( $this -> getIdade() + 1 );
        }
        public function __construct($no, $id, $se) {
            $this -> setNome($no);
            $this -> setIdade($id);
            $this -> setSexo($se);
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