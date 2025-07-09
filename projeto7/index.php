<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Herança aula 10</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';

                $p[0] = new Pessoa("Pedro", 30, "M");
                $p[1] = new Aluno("Maria", 20, "F", "2025101", "Informática");
                $p[2] = new Professor("Cláudio", 45, "M", "História", 2500.75);
                $p[3] = new Funcionario("Fabiana", 38, "F", "Estoque", false);

                echo "<h1>Pessoas</h1><div class='pessoas'>";
                for ($i = 0; $i <= 3; $i++) {
                    echo "<div class='info'>";
                    print_r($p[$i]);
                    echo "</div>";
                }
                echo "</div>";

                $p[0] -> fazerAniv();
                $p[1] -> cancelarMatricula();
                $p[2] -> receberAumento(550.20);
                $p[3] -> trabalhar();

                echo "<h1>Pessoas</h1><div class='pessoas'>";
                for ($i = 0; $i <= 3; $i++) {
                    echo "<div class='info'>";
                    print_r($p[$i]);
                    echo "</div>";
                }
                echo "</div>";
            ?>    
        </pre>
    </body>
</html>