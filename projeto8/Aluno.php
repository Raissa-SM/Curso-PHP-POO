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
        public function pagarMensalidade() {
            echo "</br>" . $this -> getNome() . " pagou sua mensalidade.</br>";
        }
        public function info(){
            echo "<div class='info'><h2>" . $this -> getNome() . "</h2>";
            echo "Idade: " . $this -> getIdade();
            echo "<br/>Sexo: " . $this -> getSexo();
            echo "</br>Matricula: " . $this -> getMatricula();
            echo "</br>Curso: " . $this -> getCurso() . "</div>";
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