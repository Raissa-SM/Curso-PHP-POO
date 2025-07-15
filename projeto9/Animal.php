    <?php
    abstract class Animal {
        protected $nome;
        protected $peso;
        protected $idade;
        protected $cor;
        protected $img;
        
        abstract public function locomover();
        abstract public function alimentar();
        abstract public function emitirSom();

        public function info() {
            echo "<div class='info'><h2>" . $this -> getNome() . "</h2>";
            echo "<div class='caracteristicas'>• Idade: " . $this -> getIdade() . " anos";
            echo "<br/>• Peso: " . $this -> getPeso() . "kg";
            echo "<br/>• Cor: " . $this -> getCor() . "</div></div>";
        }

        public function getNome() {
            return $this -> nome;
        }

        public function setNome($no) {
            $this -> nome = $no;
        }

        public function getPeso() {
            return $this -> peso;
        }

        public function setPeso($pe) {
            $this -> peso = $pe;
        }

        public function getIdade() {
            return $this -> idade;
        }

        public function setIdade($id) {
            $this -> idade = $id;
        }

        public function getCor() {
            return $this -> cor;
        }

        public function setCor($co) {
            $this -> cor = $co;
            $this -> setImg("imagens/" . strtolower(get_class($this)) . "_" . strtolower($this -> getCor()) . ".jpg");
        }

        public function getImg() {
            return $this -> img;
        }

        public function setImg($im) {
            $this -> img = $im;
        }
    }
?>
