<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01 - PHP</title>
    <style>
        /* Estilos globais para o corpo da página */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
}

/* Estilos para o cabeçalho */
header {
    background-color: #0056b3;
    color: white;
    padding: 20px;
    width: 100%;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}

/* Estilos para o conteúdo principal */
main {
    flex: 1;
    padding: 20px;
    width: 90%;
    max-width: 800px;
}

.atividade-info {
    background-color: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}

.atividade-info h2 {
    color: #004494;
    border-bottom: 2px solid #0056b3;
    padding-bottom: 10px;
    margin-top: 0;
}

.atividade-info p {
    font-size: 1.1em;
    margin: 10px 0;
}

.atividade-info strong {
    color: #555;
}

/* Estilos para o rodapé */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
    width: 100%;
    margin-top: auto;
}
    </style>
</head>

<body>

    <header>
        <h1>Curso Backend - Programação PHP</h1>
    </header>

    <main>
        <?php 
        $Proposto = "Atividade 01 de 22/09/2025";
        $Nome = "Luiz Oryone";
        $Idade = 55;
        ?>

        <section class="atividade-info">
            <h2>Dados da Atividade</h2>
            <p><strong>Proposto:</strong> <?= $Proposto ?></p>
            <p><strong>Nome:</strong> <?= $Nome ?></p>
            <p><strong>Idade:</strong> <?= $Idade ?></p>
        </section>
    </main>

    <footer>
        <p>Copyright &copy; 2025 - Todos os direitos reservados.</p>
    </footer>

</body>

</html>