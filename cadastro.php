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

            <h3 class="nomeapp" onclick="javascript:document.location.href='./index.html'">ControlAR</h3>
        </header>

        <main>
            <form action="./scripts/cadastro-banco.php" method="get">
                <label for="nome">Digite seu nome: </label>
                <input type="text" name="nome" id="nome">

                <label for="user">Digite seu email: </label>
                <input type="email" name="user" id="user">

                <label for="senha">Crie uma senha: </label>
                <input type="password" name="senha" id="senha">

                <button type="submit">Finalizar Cadastro</button>
            </form>
        </main>

    </div>
</body>
</html>
