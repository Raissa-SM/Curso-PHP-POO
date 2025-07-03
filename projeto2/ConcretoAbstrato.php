<?php
    //objeto concreto
    class Garrafa{
        var $nome = "garrafa";
        var $tamanho;
        var $conteudo;
        var $carga;
        var $cor;
        var $tampada;

        function tampar() {
            $this -> tampada = true;
            echo "<br/>A garrafa foi tampada<br/>";
        }

        function destampar() {
            $this -> tampada = false;
            echo "<br/>A garrafa foi destampada<br/>";
        }

        function beber() {
            if ($this -> tampada) {
                echo "<br/>Erro! Está tampada.<br/>";
            }
            elseif ($this -> carga == 0) {
                echo "<br/>Erro! Está vasia<br/>";
            }
            else {
                echo "<br/>Estou bebendo ". $this -> conteudo ." da ". $this -> nome ." ". $this -> cor ."<br/>";
            }
        }
        
        function atualizarcarga($volume) {
            $this -> carga = $volume;
        }

        function encher($bebida) {
            if ($this -> tampada) {
                echo "<br/>Erro! Está tampada.<br/>";
            }
            elseif ($this -> carga == 100) {
                echo "<br/>Erro! Já está cheia de ". $this -> conteudo ."<br/>";
            }
            else {
                echo "<br/>Estou enchendo a ". $this -> nome ." de $bebida<br/>";
                $this -> conteudo = $bebida;
                $this -> carga = 100;
            }
        }
    }

    //objeto abstrato (o app)
    class Calendário{
        var $dia;
        var $mes;
        var $ano;
        var $evento;

        function data() {
            echo "<br/>Hoje é dia ". $this -> dia ." de ". $this -> mes ." de ". $this -> ano ."<br/>";
        }

        function marcarevento($nome) {
            $this -> evento = $nome;
            echo "<br/>". $nome ." marcado<br/>";
        }
        function desmarcarevento() {
            $this -> evento = "";
            echo "<br/>Evento desmarcado<br/>";
        }
        function procurarevento() {
            if ($this -> evento == "") {
                echo "<br/>Não há evento marcado<br/>";
            }
            else {
                echo "<br/>Seu evento marcado é ". $this -> evento ."<br/>";
            }
        }

    }

?>