<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="styles.css"/>
        <title>Meu Animal</title>
    </head>
    <body>
        <div class="container">
            <h1>Brinque com seu animal</h1>
            <h2>Escolha o que quer fazer</h2>
            <form class="botoes" method="post">
                <button class="botao" name="funcoes" value="nome">Mudar Nome</button>
                <button class="botao" name="funcoes" value="idade">Mudar Idade</button>
                <button class="botao" name="funcoes" value="peso">Mudar Peso</button>
                <button class="botao" name="funcoes" value="cor">Mudar Cor</button>
            </form>
            <form class="botoes" method="post">
                <button class="botao" name="funcoes" value="locomover">Locomover</button>
                <button class="botao" name="funcoes" value="alimentar">Alimentar</button>
                <button class="botao" name="funcoes" value="emitirSom">Emitir Som</button>
            </form>
            <?php
                require_once 'Arara.php';
                require_once 'Cachorro.php';
                require_once 'Canguru.php';
                require_once 'Cobra.php';
                require_once 'Peixinho.php';
                require_once 'Tartaruga.php';
                
                function cria_botao($Cor) {
                    echo "<button class='botao' name='cores' value=$Cor>$Cor</button>";
                }

                session_start();
                $animal = unserialize($_SESSION["animal"]);

                $caminho = $animal -> getImg();
                if (isset($animal)) {
                    echo "<div class='img_info'><img src='$caminho' alt='Foto'>";
                    echo "<div class='animal'><strong>Animal escolhido:</strong><br>";
                    $animal -> info();
                    echo "</div></div>";
                }

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    if (isset($_POST['funcoes'])) {
                        $funcoes = $_POST['funcoes'];
                        if ($funcoes === "nome") {
                            echo "<div class='acao'><form method='POST' action='index2.php'>
                                    <input type='text' name='nome' placeholder='Novo nome aqui' required>
                                    <button class='botao' type='submit'>Enviar</button>
                                </form></div>";
                        } elseif ($funcoes === "idade") {
                            echo "<div class='acao'><form method='POST' action='index2.php'>
                                    <input type='number' name='idade' placeholder='Nova idade aqui' required>
                                    <button class='botao' type='submit'>Enviar</button>
                                </form></div>";
                        } elseif ($funcoes === "peso") {
                            echo "<div class='acao'><form method='POST' action='index2.php'>
                                    <input type='number' name='peso' placeholder='Novo peso aqui' required>
                                    <button class='botao' type='submit'>Enviar</button>
                                </form></div>";
                        } elseif ($funcoes === "cor") {
                            echo "<form class='botoes' method='post'>"; 
                            if(get_class($animal) == 'Arara') {
                                cria_botao('Azul');
                                cria_botao('Branco');
                                cria_botao('Laranja');
                                cria_botao('Verde');
                                cria_botao('Vermelho');
                            } elseif(get_class($animal) == 'Cachorro') {
                                cria_botao('Branco');
                                cria_botao('Caramelo');
                                cria_botao('Cinza');
                                cria_botao('Marrom');
                                cria_botao('Preto');
                            } elseif(get_class($animal) == 'Canguru') {
                                cria_botao('Amarelo');
                                cria_botao('Cinza');
                                cria_botao('Marrom');
                            } elseif(get_class($animal) == 'Cobra') {
                                cria_botao('Branco');
                                cria_botao('Marrom');
                                cria_botao('Preto');
                                cria_botao('Verde');
                                cria_botao('Vermelho');
                            } elseif(get_class($animal) == 'Peixinho') {
                                cria_botao('Azul');
                                cria_botao('Branco');
                                cria_botao('Dourado');
                                cria_botao('Laranja');
                                cria_botao('Marrom');
                                cria_botao('Prata');
                                cria_botao('Preto');
                            } elseif(get_class($animal) == 'Tartaruga') {
                                cria_botao('Marrom');
                                cria_botao('Verde');
                                cria_botao('Vermelho');
                            }
                            echo "</form>";
                        } elseif ($funcoes === "locomover") {
                            echo "<div class='acao'>";
                            $animal -> locomover();
                            $caminho = 'imagens/' . strtolower(get_class($animal)) . '_' . $funcoes . '.jpg';
                            echo "<img src='$caminho' alt='Foto'></div>";
                        } elseif ($funcoes === "alimentar") {
                            echo "<div class='acao'>";
                            $animal -> alimentar();
                            $caminho = 'imagens/' . strtolower(get_class($animal)) . '_comendo.jpg';
                            echo "<img src='$caminho' alt='Foto'></div>";
                        } elseif ($funcoes === "emitirSom") {
                            echo "<div class='acao'>";
                            $animal -> emitirSom();
                            echo "</div>";
                        }
                    } 

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST["nome"])) {
                            $nome = $_POST["nome"];
                            $animal -> setNome($nome);
                            $_SESSION["animal"] = serialize($animal);
                        } elseif (isset($_POST["idade"])) {
                            $idade = $_POST["idade"];
                            $animal -> setIdade($idade);
                            $_SESSION["animal"] = serialize($animal);
                        } elseif (isset($_POST["peso"])) {
                            $peso = $_POST["peso"];
                            $animal -> setPeso($peso);
                            $_SESSION["animal"] = serialize($animal);
                        } elseif (isset($_POST["cor"])) {
                            $cor = $_POST["cor"];
                            $animal -> setCor($cor);
                            $_SESSION["animal"] = serialize($animal);
                        } 
                        
                    }
                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                        if (isset($_POST['cores'])) {
                            $animal -> setCor($_POST['cores']);
                            $_SESSION["animal"] = serialize($animal);
                        }
                    }
                }
            ?>
            <footer>
                <a class='botao' href='index.php'>Voltar</a>
                <a class='botao' href='index2.php'>Carregar</a>
            </footer>
        </div>   
    </body>
</html>