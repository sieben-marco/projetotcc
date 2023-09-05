<?php
    print_r($_REQUEST);

    if (isset($_GET['submit'])) {
        $email = $_GET['email'];
        $senha = $_GET['senha'];

        print_r("<br>Email: " . $email);
        print_r("<br>");
        print_r("Senha: " . $senha);
    }
?>