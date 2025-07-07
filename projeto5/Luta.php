<?php
    require_once 'Lutador.php';
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function getDesafiado() {
            return $this -> desafiado;
        }
        public function setDesafiado($dd) {
            $this -> desafiado = $dd;
        }
        public function getDesafiante() {
            return $this -> desafiante;
        }
        public function setDesafiante($dt) {
            $this -> desafiante = $dt;
        }
        public function getRounds() {
            return $this -> rounds;
        }
        public function setRounds($rd) {
            $this -> rounds = $rd;
        }
        public function getAprovada() {
            return $this -> aprovada;
        }
        public function setAprovada($ap) {
            $this -> aprovada = $ap;
        }

        public function marcarLuta($dd, $dt) {
            if($dd != $dt && $dd -> getCategoria() == $dt -> getCategoria()) {
                $this -> setAprovada(true);
                $this -> setDesafiado($dd);
                $this -> setDesafiante($dt);
            }
            else {
                $this -> setAprovada(false);
                $this -> setDesafiado(null);
                $this -> setDesafiante(null);
            }
        }

        public function lutar() {
            if ($this -> getAprovada()) {
                echo "</br>Próxoma luta: </br>";
                $this -> desafiado -> apresentar();
                $this -> desafiante -> apresentar();
                $ven = rand(0,2); // 0 = empate | 1 = desafiado | desafiante
                switch($ven) {
                    case 0:
                        echo "</br>Empate!</br>";
                        $this -> desafiado -> empatarLuta();
                        $this -> desafiante -> empatarLuta();
                        break;
                    case 1:
                        echo "</br>Vitória de " . $this -> desafiado -> getNome() . "!</br>";
                        $this -> desafiado -> ganharLuta();
                        $this -> desafiante -> perderLuta();
                        break;
                    case 2:
                        echo "</br>Vitória de " . $this -> desafiante -> getNome() . "!</br>";
                        $this -> desafiado -> perderLuta();
                        $this -> desafiante -> ganharLuta();
                }
            }
            else {
                echo "A luta não foi aprovada.";
            }
        }
    }
?>