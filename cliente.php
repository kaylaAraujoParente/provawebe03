<!DOCTYPE html>
<html>
    <head>
       <meta charset ="UTF-8">
       <title>cadastro de clientes</title> 

    </head>
<body>


    <?php 
        //recuperação de parametros
        $nome = $_GET["nome"];
        $cnpj = $_GET["cnpj"];

        //processamento
        include_once("conexaobd.php");

        $sql = "INSERT INTO CLIENTE(NOME, CNPJ) VALUES('$nome','$cnpj');";

        mysqli_query($connection, $sql) or die("Erro cadastrar Cliente");
        //saída
        echo "Cliente Cadastrado com sucesso<br>";
        echo"nome: $nome<br>";
        ECHO "cnpj: $cnpj<br>";

