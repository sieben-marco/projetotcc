<?php
    $dbHost = 'localhost';
    $dbUsername = 'id21218187_root' /*"root"*/;
    $dbPassword = '0561992Am+' /*""*/;
    $dbName = 'id21218187_testetcc';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno) {
    //     echo "<br>Erro";
    // } else {
    //     echo "<br>Conexão efetuada com sucesso!";
    // }

    // $nome = $_GET["nome"];
    // $user = $_GET["user"];
    // $senha = $_GET["senha"];

    // $result = mysqli_query($conexao, "insert into (id, nome, email, senha) values ('1', '$nome', '$user', '$senha')");
?>