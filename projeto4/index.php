<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Encapsulamento aula 6</title>
    </head>
    <body>
        <pre>
            <h1>Projeto Controle Remoto</h1>
            <?php
                require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c -> ligar();
                $c -> abrirMenu();
            ?>    
        </pre>
    </body>
</html>