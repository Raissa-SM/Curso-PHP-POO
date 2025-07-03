<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Concreto e abstrato aula 2</title>
    </head>
    <body>
        <?php
            require_once 'ConcretoAbstrato.php';
            
            $g1 = new Garrafa;
            $g1 -> tamanho = "grande";
            $g1 -> conteudo = "Coca";
            $g1 -> carga = 100;
            $g1 -> cor = "Azul";
            $g1 -> tampada = true;

            print_r($g1);
            $g1 -> beber();
            $g1 -> destampar();
            $g1 -> beber();
            $g1 -> atualizarcarga(50);
            print_r($g1);
            $g1 -> encher("Água");
            print_r($g1);

            echo "<br/><br/>";

            $c1 = new Calendário;
            $c1 -> dia = 06;
            $c1 -> mes = "Fevereiro";
            $c1 -> ano = 2025;

            $c1 -> marcarevento("Cortar o cabelo");
            $c1 -> data();

        ?>    
    </body>
</html>