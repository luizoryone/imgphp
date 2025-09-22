<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Inicial 22092025</title>
</head>

<body>
    <h1>Olá, Mundo! Este é meu primeiro código PHP.</h1>

    <?php 
    $Luiz = "Luiz Oryone";
    const URL_DO_SITE = "https";
    echo "O URL do site é " . URL_DO_SITE;
    ?>
    
    
    <h1>
        <?php echo "<p>Meu nome é $Luiz e eu tenho 30 anos e uso " . URL_DO_SITE . "</p>"; ?>
        
        <p>Meu nome é <?= $Luiz ?> e eu tenho 30 anos e uso <?= URL_DO_SITE ?></p>
    </h1>

    <?php
        echo "<p>Este é um parágrafo gerado por PHP.</p>";
        $nome = "João";
        $idade = 25;
        echo "<p>Meu nome é $nome e eu tenho $idade anos.</p>";
    ?>

</body>

</html>