<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <h1>Resposta:</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo 'nome' foi preenchido
        if (isset($_POST["nome"])) {
            $nome = $_POST["nome"];
            echo "<p>Olá, $nome!</p>";
        } else {
            echo "<p>O campo 'nome' não foi preenchido.</p>";
        }
    } else {
        echo "<p>O formulário não foi enviado.</p>";
    }
    ?>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>