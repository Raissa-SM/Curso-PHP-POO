<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Relacionamento entre Classes aula 7</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Lutador.php';
                $l[0] = new Lutador("Pretty Boy", "Francês", 30, 1.75, 68.9, 11, 2, 1);
                $l[0] -> status();
            ?>    
        </pre>
    </body>
</html>