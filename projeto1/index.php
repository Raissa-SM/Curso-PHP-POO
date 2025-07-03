<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Criando classes e objetos aula 2</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';
                
                $c1 = new Caneta("bic","Azul",0.5);
                
                print_r($c1);
            ?> 
        </pre>   
    </body>
</html>