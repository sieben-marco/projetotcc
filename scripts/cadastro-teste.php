<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Testando cadastro...</h1>

        <?php
            $nome = $_GET["nome"];
            $user = $_GET["user"];
            $senha = $_GET["senha"];

            echo "Seu nome é <strong>$nome</strong><br>
            Seu user é <strong>$user</strong><br>
            Sua senha é <strong>$senha</strong>";
        ?>
    </main>
</body>
</html>