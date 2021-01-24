<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--  LINKANDO FONTE DO GOOGLE -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!--  LINKANDO CSS DO ASSET -->
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Aprendendo PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>APRENDENDO PHP</h1>
        <h2>Indice dos exercicios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">

            <nav class="modulos">

                <!--  ALÉM DE MODULO ELE É VERDE -->
                <div class="modulo verde">
                    <h3>01 - BASICO</h3>
                    <ul>
                        <li><a href='exercicio.php?dir=teste&file=teste'>Exercicio A</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>02 - BASICO</h3>
                    <ul>
                        <li><a href='#'>Exercicio A</a></li>
                    </ul>
                </div>

                <div class="modulo azul">
                    <h3>03 - BASICO</h3>
                    <ul>
                        <li><a href='#'>Exercicio A</a></li>
                    </ul>
                </div>

            </nav>

        </div>
    </main>
    <footer class="rodape">
        <!--  ANO FIXO ESTATICO -->
        Desenvolvido por Pedro França utilizando curso do COD3R © <?= date('Y'); ?>
    </footer>

</body>

</html>