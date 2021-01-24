<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--  LINKANDO FONTE DO GOOGLE -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!--  LINKANDO CSS DO ASSET -->
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Exercicio</title>
</head>

<body class="exercicio">>
    <header class="cabecalho">
        <h1>APRENDENDO PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
    <nav class="navegacao">
        <a href="#" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
                // include($_GET['dir'] . '/' . $_GET['file'] . '.php');
                include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        <!--  ANO FIXO ESTATICO -->
        Desenvolvido por Pedro França utilizando curso do COD3R © <?= date('Y'); ?>
    </footer>

</body>

</html>