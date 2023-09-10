<?php
    include_once("./config.php");

    $nome = $_GET["nome"];
    $user = $_GET["user"];
    $senha = $_GET["senha"];
    $id = mt_rand(1, 5000);

    // if ($id == id_do_banco) ....

    $result = mysqli_query($conexao, "insert into teste_cliente (id_cliente, nome, email, senha) values ('$id', '$nome', '$user', '$senha')");

    // echo "<br>$result";
    header("Location: ./../sistema.php");
?>