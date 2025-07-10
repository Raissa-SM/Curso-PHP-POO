<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style8.css"/>
        <title>Herança aula 11</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Visitante.php';
                require_once 'Aluno.php';
                require_once 'Bolsista.php';
                require_once 'Tecnico.php';
                require_once 'Professor.php';

                $p[0] = new Visitante('Raíssa', 19, 'F');
                $p[1] = new Aluno('Melissa', 20, 'F', 231501, 'BSN');
                $p[2] = new Bolsista('Johann', 19, 'M', 270506, 'BSN', 50);
                $p[3] = new Tecnico('Claudio', 54, 'M', 290171, 'Mecânica', 123456);
                $p[4] = new Professor('Manu', 40, 'F', 'Matemética', 2550);

                echo "<h1>Pessoas</h1><div class='pessoas'>";
                for ($i = 0; $i <= 4; $i++) {
                    echo "<div class='info'>";
                    $p[$i] -> info();
                    echo "</div>";
                }
                echo "</div>";

                $p[0] -> fazerAniv();
                $p[1] -> pagarMensalidade();
                $p[2] -> pagarMensalidade();
                $p[3] -> praticar();
                $p[4] -> receberAumento(200);

                echo "</br><div class='pessoas'>";
                for ($i = 0; $i <= 4; $i++) {
                    echo "<div class='info'>";
                    $p[$i] -> info();
                    echo "</div>";
                }
                echo "</div>";
            ?>    
        </pre>
    </body>
</html>