<?php
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        function abrirConta ($t, $d) {
            //$this -> numConta = random_int(111111,999999);
            $this -> setTipo($t);
            $this -> setDono($d);
            $this -> setStatus(true);
            if ($this -> tipo == "cc") {
                $this -> saldo = 50;
                echo "<br/>Conta corrente no nome de ". $this -> dono ." aberta com sucesso, obrigada por escolher nosso banco!<br/>Seu saldo inicial é de R$50,00.<br/>";
            }
            else if ($this -> tipo == "cp") {
                $this -> saldo = 150;
                echo "<br/>Conta poupança no nome de ". $this -> dono ." aberta com sucesso, obrigada por escolher nosso banco!<br/>Seu saldo inicial é de R$150,00.<br/>";
            }
            else {
                echo "<br/>Erro";
            }
        }

        function fecharConta () {
            if ($this -> saldo < 0) {
                echo "<br/>Não é possível fechar esta conta pois ela possui um débito de R$". number_format($this -> saldo,2,",",".");
            }
            else if ($this -> saldo > 0) {
                echo "<br/>Não é possível fechar esta conta pois ela possui um saldo de R$". number_format($this -> saldo,2,",",".");
            }
            else {
                $this -> status = false;
                echo "<br/>Conta fechada, esperamos que nossos serviços tenham lhe agradado.";
            }
        }

        function depositar ($v) {
            if ($this -> status) {
                $this -> saldo += $v;
                echo "<br/>" . $this -> dono . " depositou R$" . number_format($v,2,",",".") . ". Seu saldo atual é de R$". number_format($this -> saldo,2,",","."). "<br/>";
            }
            else {
                echo "<br/>Erro, conta fechada";
            }
        }

        function sacar ($v) {
            if ($this -> status) {
                if ($this -> saldo < $v) {
                    echo "<br/>Não é possivel sacar R$" . number_format($v,2,",",".") . ", a conta somente possui R$". number_format($this -> saldo,2,",",".");
                }
                else {
                    $this -> saldo -= $v;
                    echo "<br/>" . $this -> dono . " sacou R$" . number_format($v,2,",",".") . ". Seu saldo atual é de R$". number_format($this -> saldo,2,",","."). "<br/>";
                }
            }
            else {
                echo "<br/>Erro, conta fechada";
            }
                
        }

        function pagarMensalidade () {
            if ($this -> status) {
                if ($this -> tipo == "cc") {
                    $v = 12;
                }
                else {
                    $v = 20;
                }
                if ($this -> saldo < $v) {
                    echo "Saldo insuficiente";
                }
                else {
                    $this -> saldo -= $v;
                }
            }
            else {
                echo "<br/>Erro, conta fechada";
            }

        }

        //métodos especiais
        function __construct() {
            $this -> saldo = 0;
            $this -> status = false;
        }

        function getNumConta() {
            return $this -> numConta;
        }

        function setNumConta($numConta) {
            $this -> numConta = $numConta;
        }

        function getTipo() {
            return $this -> tipo;
        }

        function setTipo($tipo) {
            $this -> tipo = $tipo;
        }

        function getDono() {
            return $this -> dono;
        }

        function setDono($dono) {
            $this -> dono = $dono;
        }

        function getSaldo() {
            return $this -> saldo;
        }

        function setSaldo($saldo) {
            $this -> saldo = $saldo;
        }

        function getStatus() {
            return $this -> status;
        }

        function setStatus($status) {
            $this -> status = $status;
        }
    }
?>