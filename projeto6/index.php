<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Exercício aula 9</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Livro.php';
                $p[0] = new Pessoa('Raíssa S. Mazzi', 19, 'f');
                $p[1] = new Pessoa('Letícia S. Mazzi', 25, 'f');
                $l[0] = new Livro('Vox', 'Christina Dalcher', 319, $p[0]);
                $l[1] = new Livro('A Garota no Trem', 'Paula Hawkins', 377, $p[0]);
                $l[2] = new Livro('O Homem de Giz', 'C. J. Tudor', 269, $p[1]);

                echo "<h1>Biblioteca</h1><div class='livros'>";
                for ($i = 0; $i <= 2; $i++) {
                    $l[$i] -> detalhes();
                }
                echo "</div>";

                $l[0] -> folhear(50);
                $l[0] -> abrir();
                $l[0] -> folhear(350);
                $l[0] -> folhear(150);
                $l[0] -> avancarPag();

                $p[0] -> fazerAniver();
            ?>    
        </pre>
    </body>
</html>