<?php
    require_once 'Pessoa.php';
    class Funcionario extends Pessoa {
        private $setor;
        private $trabalhando;

        public function __construct($no, $id, $se, $set, $tra) {
            parent::__construct($no, $id, $se);
            $this -> setSetor($set);
            $this -> setTrabalhando($tra);
        }
        public function trabalhar() {
            $this -> setTrabalhando(true);
        }

        public function pararTrabalho() {
            $this -> setTrabalhando(false);
        }
        public function statusTrabalho() {
            return $this -> getTrabalhando() ? "Em serviço" : "Parado";
        }
        // Getters e Setters protegidos
        protected function getSetor() {
            return $this -> setor;
        }
        protected function setSetor($set) {
            $this -> setor = $set;
        }
        protected function getTrabalhando() {
            return $this -> trabalhando ;
        }
        protected function setTrabalhando($tra) {
            $this -> trabalhando  = $tra;
        }
    }
?>
