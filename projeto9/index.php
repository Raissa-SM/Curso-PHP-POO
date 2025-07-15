<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css"/>
        <title>Polimorfismo aula 12</title>
    </head>
    <body>
        <div class="container">
            <h1>Monte seu animal</h1>
            <h2>Escolha uma classe</h2>
            <form class="botoes" method="post">
                <button class="botao" name="classe" value="mamifero">Mamífero</button>
                <button class="botao" name="classe" value="reptil">Réptil</button>
                <button class="botao" name="classe" value="peixe">Peixe</button>
                <button class="botao" name="classe" value="ave">Ave</button>
            </form>
            <?php
                require_once 'Arara.php';
                require_once 'Cachorro.php';
                require_once 'Canguru.php';
                require_once 'Cobra.php';
                require_once 'Peixinho.php';
                require_once 'Tartaruga.php';

                function cria_botao($ani,$Ani) {
                    echo "<button class='botao' name='especies' value=$ani>$Ani</button>";
                }              

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    if (isset($_POST['classe'])) {
                        $classe = $_POST['classe'];

                        if ($classe === "mamifero") {
                            echo "<form class='botoes' method='post'>";      
                            cria_botao('canguru','Canguru');
                            cria_botao('cachorro', 'Cachorro');
                            echo "</form>";
                        } elseif ($classe === "reptil") {
                            echo "<form class='botoes' method='post'>";      
                            cria_botao('cobra','Cobra');
                            cria_botao('tartaruga', 'Tartaruga');
                            echo "</form>";
                        } elseif ($classe === "peixe") {
                            echo "<form class='botoes' method='post'>";      
                            cria_botao('peixinho','Peixinho');
                            echo "</form>";
                        } elseif ($classe === "ave") {
                            echo "<form class='botoes' method='post'>";      
                            cria_botao('arara','Arara');
                            echo "</form>";
                        }
                    } elseif (isset($_POST['especies'])) {
                        $especie = $_POST['especies'];

                        if ($especie === "canguru") {
                            $animal = new Canguru();
                            echo "<div class='img_info'><img src='imagens/canguru_marrom.jpg' alt='Foto de canguru'>";
                        } elseif ($especie === "cachorro") {
                            $animal = new Cachorro();
                            echo "<div class='img_info'><img src='imagens/cachorro_preto.jpg' alt='Foto de cachorro'>";
                        } elseif ($especie === "cobra") {
                            $animal = new Cobra();
                            echo "<div class='img_info'><img src='imagens/cobra_preta.jpg' alt='Foto de cobra'>";
                        } elseif ($especie === "tartaruga") {
                            $animal = new Tartaruga();
                            echo "<div class='img_info'><img src='imagens/tartaruga_marrom.jpg' alt='Foto de tartaruga'>";
                        } elseif ($especie === "peixinho") {
                            $animal = new Peixinho();
                            echo "<div class='img_info'><img src='imagens/peixe_preto.jpg' alt='Foto de peixe'>";
                        } elseif ($especie === "arara") {
                            $animal = new Arara();
                            echo "<div class='img_info'><img src='imagens/arara_laranja.jpg' alt='Foto de arara'>";
                        }

                        if (isset($animal)) {
                            echo "<div class='animal'><strong>Animal escolhido:</strong><br>";
                            $animal -> info();
                            echo "</div></div>";
                            session_start();
                            $_SESSION["animal"] = serialize($animal);
                            echo "<footer><a class='botao' href='index2.php'>Continuar</a><a class='botao' href='index.php'>Reiniciar</a></footer>";
                        }
                    }
                }
            ?>
        </div>   
    </body>
</html>