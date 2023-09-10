<?php
    // print_r($_REQUEST);

    // verifica se aconteceu uma submissão de dados
    if (isset($_GET["submit"]) /*&& !empty($_GET["email"]) && !empty($_GET["senha"])*/) {
        // aponta para o arquivo de conexão com o servidor do banco de dados
        include_once("./scripts/config.php");
        // armazena email informado no formulário
        $email = $_GET['email'];
        // armazena senha informada no formulário
        $senha = $_GET['senha'];


        // print_r("<br>Email: " . $email);
        // print_r("<br>");
        // print_r("Senha: " . $senha);


        // armazena consulta que será feita no banco de dados
        $sql = "select * from teste_cliente where email = '$email' and senha = '$senha'";

        // armazena resultado da consulta no banco
        $result = $conexao->query($sql);


        // print_r($result);

        $mostra_erro = mysqli_num_rows($result);

        
        // verifica se usuário pode ou não acessar o app
        if (mysqli_num_rows($result) < 1) {
            // se não permitir volta para a página de login
            header("Location: ./login.php");
        } else {
            // se permitir acessa a página principal do app
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
    <!-- importa bootstrap para estilizar os arquivos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- importa estilos locais -->
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

            <!-- fomulário para acessar o app -->
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="form-login">
                <!-- grupo para informar o email -->
                <div class="form-group">
                    <label for="email" class="col-form-label">Insira seu email: </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
                </div>

                <!-- grupo para informar a senha -->
                <div class="form-group">
                    <label for="senha" class="col-form-label">Insira sua senha: </label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
                </div>

                <!-- botão para verificar permissão de acesso ao app -->
                <button type="submit" name="submit" value="Entrar" class="btn btn-primary">Entrar</button>
            </form>

            <!-- "botão" caso precise recuperar ou trocar a senha -->
            <a class="btn btn-primary esqueci-senha" href="./atualizar-senha.html">Esqueci minha senha</a>
        </main>

    </div>
</body>
</html>
