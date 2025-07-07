<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Relacionamento entre Classes aula 7</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Lutador.php';
                require_once 'Luta.php';
                $l[0] = new Lutador("Pretty Boy", "Francês", 30, 1.75, 68.9, 11, 2, 1);
                $l[1] = new Lutador("Putscript", "Brasileiro", 29, 1.68, 57.8, 14, 2, 3);
                $l[2] = new Lutador("Snapshadow", "Estadunidense", 35, 1.65, 80.9, 12, 2, 1);
                $l[3] = new Lutador("Dead Code", "Australiano", 28, 1.93, 81.6, 13, 0, 2);
                $l[4] = new Lutador("Ufocobol", "Brasileiro", 37, 1.70, 119.3, 5, 4, 3);
                $l[5] = new Lutador("Nerdaart", "Estadunidense", 30, 1.81, 105.7, 12, 2, 4);

                echo "<h1>Lutadores da temporada de 2025 da UEC</h1><div class='lutadores'>";
                for($i = 0; $i <= 5; $i++) {
                    $l[$i] -> status();
                }
                echo "</div>";

                $lt = new Luta();
                $lt -> marcarLuta($l[0],$l[1]);
                $lt -> lutar();

                for($i = 0; $i <= 1; $i++) {
                    $l[$i] -> status();
                }
            ?>    
        </pre>
    </body>
</html>