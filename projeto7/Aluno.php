<?php
    require_once 'Pessoa.php';
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function __construct($no, $id, $se, $ma, $cu) {
            parent::__construct($no, $id, $se);
            $this -> setMatricula($ma);
            $this -> setCurso($cu);
        }
        public function cancelarMatricula() {
            $this -> setMatricula(null);
            $this -> setCurso("CANCELADO");
        }

        // Getters e Setters protegidos
        protected function getMatricula() {
            return $this -> matricula;
        }
        protected function setMatricula($ma) {
            $this -> matricula = $ma;
        }
        protected function getCurso() {
            return $this -> curso;
        }
        protected function setCurso($cu) {
            $this -> curso = $cu;
        }
    }
?>