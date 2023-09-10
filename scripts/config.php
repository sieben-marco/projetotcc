<?php
    // configura url do servidor do banco de dados
    $dbHost = 'localhost';
    // configura o nome de usuário do servidor do banco (acesso)
    $dbUsername = 'id21218187_root' /*"root"*/;
    // configura a senha do banco
    $dbPassword = '0561992Am+' /*""*/;
    // configura o nome do banco de dados
    $dbName = 'id21218187_testetcc';

    // armazena o objeto que "acessa o banco de dados"
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


    
    // teste de conexão
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