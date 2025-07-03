<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Exemplo Prático aula 5</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'ContaBanco.php';

                $c1 = new ContaBanco;
                $c1 -> abrirConta("cp","Jubileu");
                $c1 -> depositar(300);

                $c2 = new ContaBanco;
                $c2 -> abrirConta("cc","Creuza");
                $c2 -> depositar(500);
                $c2 -> sacar(100);                
            ?>    
        </pre>
    </body>
</html>