<?php
    require_once 'Publicacao.php';
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;       
        
        private function getTitulo() {
            return $this -> titulo;
        }
        private function setTitulo($ti) {
            $this -> titulo = $ti;
        }
        private function getAutor() {
            return $this -> autor;
        }
        private function setAutor($au) {
            $this -> autor = $au;
        }
        private function getTotPaginas() {
            return $this -> totPaginas;
        }
        private function setTotPaginas($tp) {
            $this -> totPaginas = $tp;
        }
        private function getPagAtual() {
            return $this -> pagAtual;
        }
        private function setPagAtual($pa) {
            $this -> pagAtual = $pa;
        }
        private function getAberto() {
            return $this -> aberto;
        }
        private function setAberto($ab) {
            $this -> aberto = $ab;
        }
        private function getLeitor() {
            return $this -> leitor;
        }
        private function setLeitor($le) {
            $this -> leitor = $le;
        }

        public function __construct($ti, $au, $tp, $le) {
        $this -> setTitulo($ti);
        $this -> setAutor($au);
        $this -> setTotPaginas($tp);
        $this -> setLeitor($le);
        $this -> setAberto(false);
        $this -> setPagAtual(0);
    }
        public function abrir() {
            $this -> setAberto(true);
            echo "</br>" . $this -> getLeitor() -> getNome() . " abriu o livro " . $this -> getTitulo() . ".</br>";
        }
        public function fechar() {
            $this -> setAberto(false);
            echo "</br>" . $this -> getLeitor() -> getNome() . " fechou o livro " . $this -> getTitulo() . ".</br>";
            $this -> setPagAtual(0);
        }
        public function folhear($pag) {
            if ($this -> getAberto()) {
                if ($pag >= 0 && $pag <= $this -> getTotPaginas()) {
                    $this -> setPagAtual($pag);
                } else {
                    echo "</br>Não há página " . $pag . " no livro " . $this -> getTitulo() . ".</br>";
                }
            }
            else {
                echo "</br>" . $this -> getTitulo() . " está fechado, não pode ser folheado.</br>";
            }
            
        }
        public function avancarPag() {
            if ($this -> getAberto()) {
                if ($this -> getPagAtual() < $this -> getTotPaginas()) {
                    $this -> setPagAtual($this -> getPagAtual() + 1);
                    echo "</br>" . $this -> getLeitor() -> getNome() . " avançou para a página " . $this -> getPagAtual() . ".</br>";
                }
            }
            else {
                echo "</br>" . $this -> getTitulo() . " está fechado, não pode avançar uma página.</br>";
            }
        }
        public function voltarPag() {
            if ($this -> getAberto()) {
                if ($this -> getPagAtual() > 0) {
                    $this -> setPagAtual($this -> getPagAtual() - 1);
                    echo "</br>" . $this -> getLeitor() -> getNome() . " voltou para a página " . $this -> getPagAtual() . ".</br>";
                }
            }
            else {
                echo "</br>" . $this -> getTitulo() . " está fechado, não pode voltar uma página.</br>";
            }    
        }
        public function detalhes() {
            echo "<div class='detalhes'><h2>" . $this -> getTitulo() . "</h2>Autor: " . $this -> getPagAtual() . "<br/>Número de páginas: " . $this -> getPagAtual() . "<br/>Leitor: " . $this -> getLeitor() -> getNome() . "</div>";
        }
    }
?>