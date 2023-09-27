<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["idade"])) {
            
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $idade = $_POST["idade"];


            // Configurações do banco de dados
            $hostname = "db";
            $username = "root";
            $password = "senha_root"; 
            $database = "setup_mysql_php";


            // Cria uma conexão com o banco de dados
            $mysqli = new mysqli($hostname, $username, $password, $database);

            
            $sql = "CREATE TABLE Users (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(30) NOT NULL,
                email VARCHAR(45) NOT NULL,
                idade VARCHAR(3),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";

            if ($mysqli->query($sql) === TRUE) {
                echo "Table Users created successfully";
            } else {
                echo "Error creating table: " . $conn->error;
            }

            

            // $validaBanco = "select * from Users where email = '{$email}'";
            // $validaBanco =  mysqli_query($mysqli, $validaBanco);
            // $validaBanco = mysqli_fetch_assoc($validaBanco);

            // $emailBanco = isset($validaBanco["email"]);

            // if(!$emailBanco){
            //     $query = "insert into Users (nome, email, idade) values ('{$nome}', '{$email}', '{$idade}')";

            //     if ($mysqli->query($query) === TRUE) {
            //         echo "Usuário adicionado com sucesso";
            //     } else {
            //         echo "Error - " . $conn->error;
            //     }
            // }else{
            //     echo "Usuário já adicionado na base de dados!";
            // }


            // Verifica se houve erros na conexão
            if ($mysqli->connect_error) {
                die("Erro na conexão ao banco de dados: " . $mysqli->connect_error);
            }

        } else {
            echo "<p>Os campos não foram preenchidos corratamente.</p>";
        }
    } else {
        echo "<p>O formulário não foi enviado.</p>";
    }
    ?>