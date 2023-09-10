<?php
    // print_r($_REQUEST);

    if (isset($_GET["submit"]) /*&& !empty($_GET["email"]) && !empty($_GET["senha"])*/) {
        include_once("./scripts/config.php");
        $email = $_GET['email'];
        $senha = $_GET['senha'];

        // print_r("<br>Email: " . $email);
        // print_r("<br>");
        // print_r("Senha: " . $senha);

        $sql = "select * from teste_cliente where email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($result);

        $mostra_erro = mysqli_num_rows($result);

        if (mysqli_num_rows($result) < 1) {
            header("Location: ./login.php");
        } else {
            header("Location: ./sistema.php");
        }
    } /*else {
        header("location: ./login.php");
    }*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="container">

        <header>
            <div id="logo" onclick="javascript:document.location.href='./index.html'">
                <img class="logo" src="assets/logo azul.png" alt="logo do app aqui">
            </div>

            <h3 class="nomeapp">Control-AR</h3>
        </header>

        <main>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="form-group">
                    <label for="email" class="col-form-label">Insira seu email: </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                </div>

                <div class="form-group">
                    <label for="senha" class="col-form-label">Insira sua senha: </label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                </div>

                <button type="submit" name="submit" value="Entrar" class="btn btn-primary">Entrar</button>
            </form>

            <a class="btn btn-primary esqueci" href="./atualizar-senha.html">Esqueci minha senha</a>
        </main>

    </div>
</body>
</html>
