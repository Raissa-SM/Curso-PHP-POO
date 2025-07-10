<?php
    final class Tecnico extends Aluno {
        private $registroProfissional;
        
        public function __construct($no, $id, $se, $ma, $cu, $rp) {
            parent::__construct($no, $id, $se, $ma, $cu);
            $this -> setRegProf($rp);
        }
        public function praticar() {
            echo "</br>Agora " . $this -> getNome() . " está praticando.</br>";
        }
        public function info(){
            echo "<div class='info'><h2>" . $this -> getNome() . "</h2>";
            echo "Idade: " . $this -> getIdade();
            echo "<br/>Sexo: " . $this -> getSexo();
            echo "</br>Matricula: " . $this -> getMatricula();
            echo "</br>Curso: " . $this -> getCurso();
            echo "</br>Reg. Prof.: " . $this -> registroProfissional . "</div>";
        }

        // Getters e Setters protegidos
        protected function getRegProf() {
            return $this -> registroProfissional;
        }
        protected function setRegProf($rp) {
            $this -> registroProfissional = $rp;
        }
    }
?>