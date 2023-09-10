<?php
    // aponta para o arquivo de configuração do bando de dados
    include_once("./config.php");

    // obtem o nome informado no formulário
    $nome = $_GET["nome"];
    // obtem o email informado no formulário
    $user = $_GET["user"];
    // obtem a senha informada no formulário
    $senha = $_GET["senha"];
    // gera "aleatoriamente" um número de 1 a 5000 para ser o id (chave principal) do usuário
    $id = mt_rand(1, 5000);

    // if ($id == id_do_banco) .... verificar se já existe o id no banco de dados

    // insere no banco de dados as informações obtidas pelo formulário
    $result = mysqli_query($conexao, "insert into teste_cliente (id_cliente, nome, email, senha) values ('$id', '$nome', '$user', '$senha')");

    // echo "<br>$result";

    // permitir que o usuário acesse a página principal
    header("Location: ./../sistema.php");
?>