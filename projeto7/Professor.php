<?php
    require_once 'Pessoa.php';
    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        public function __construct($no, $id, $se, $es, $sa) {
            parent::__construct($no, $id, $se);
            $this -> setEspecialidade($es);
            $this -> setSalario($sa);
        }
        public function receberAumento($valor) {
            $this -> setSalario( $this -> getSalario() + $valor );
        }

        // Getters e Setters protegidos
        protected function getEspecialidade() {
            return $this -> especialidade;
        }
        protected function setEspecialidade($es) {
            $this -> especialidade = $es;
        }
        protected function getSalario() {
            return $this -> salario;
        }
        protected function setSalario($sa) {
            $this -> salario = $sa;
        }
    }
?>
