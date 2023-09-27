<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Docker - setup php with mysql</title>
    </head>

    <body>
        <h1>Insira seus dados:</h1>

        <form action="insert_database.php" method="post">
            <label>Nome<label>
            <input type="text" name="nome" id="nome">
            <label>E-mail<label>
            <input type="email" name="email" id="email">
            <label>Idade<label>
            <input type="number" name="idade" id="idade">
            <input type="submit" value="Enviar">
        </form>

    </body>
</html>