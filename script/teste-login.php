<?php
    // print_r($_REQUEST);

    if (isset($_GET["submit"]) && !empty($_GET["email"]) && !empty($_GET["senha"])) {
        include_once("./config.php");
        $email = $_GET['email'];
        $senha = $_GET['senha'];

        // print_r("<br>Email: " . $email);
        // print_r("<br>");
        // print_r("Senha: " . $senha);

        $sql = "select * from teste_cliente where email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($result);

        if(mysqli_num_rows($result) < 1) {
            header("location: ./../login.php");
        } else {
            header("location: ./../sistema.php");
        }
        
    } else {
        header("location: ./../login.php");
    }
?>