<?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    final class Bolsista extends Aluno {
        private $bolsa;
        
        public function __construct($no, $id, $se, $ma, $cu, $bo) {
            parent::__construct($no, $id, $se, $ma, $cu);
            $this -> setBolsa($bo);
        }
        public function pagarMensalidade() {
            echo "</br>" . $this -> getNome() . " pagou sua mensalidade com " . $this -> getBolsa() . "% de desconto.</br>";
        }
        public function renovarBolsa() {
            echo "</br>" . $this -> getNome() . " renovou sua bolsa de " . $this -> getBolsa() . "%.</br>";
        }
        public function info(){
            echo "<div class='info'><h2>" . $this -> getNome() . "</h2>";
            echo "Idade: " . $this -> getIdade();
            echo "<br/>Sexo: " . $this -> getSexo();
            echo "</br>Matricula: " . $this -> getMatricula();
            echo "</br>Curso: " . $this -> getCurso();
            echo "</br>Bolsa: " . $this -> bolsa . "%</div>";
        }

        // Getters e Setters protegidos
        protected function getBolsa() {
            return $this -> bolsa;
        }
        protected function setBolsa($bo) {
            $this -> bolsa = $bo;
        }
    }
    
?>