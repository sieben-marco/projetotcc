<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- configura conjunto de caracteres -->
    <meta charset="UTF-8">
    <!-- dimensiona tamanho de escala da tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- configura com para a guia do navegador -->
    <title>Document</title>
    <!-- importa bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- importa estilo local -->
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <!-- envolve todo o site (bootstrap) -->
    <div class="container">

        <!-- bloco envolvendo o logo e nome do produto -->
        <header>
            <button type="button" class="voltar" onclick="javascript:document.location.href='./index.html'"><--</button>

            <div id="logo" onclick="javascript:document.location.href='./index.html'">
                <!-- imagem com o logo do produto -->
                <img class="logo" src="assets/logo azul.png" alt="logo do app aqui">
            </div>

            <!-- nome do produto -->
            <h3 class="nomeapp" onclick="javascript:document.location.href='./index.html'">ControlAR</h3>
        </header>

        <!-- bloco principal do app -->
        <main>
            <!-- formulário para o cadastro de novo usuário -->
            <form action="./scripts/cadastro-banco.php" method="get" class="form-login">
                <!-- grupo para inserir nome -->
                <div class="form-group">
                    <label for="nome" class="col-form-label">Digite seu nome: </label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>

                <!-- grupo para inserir email -->
                <div class="form-group">
                    <label for="user" class="col-form-label">Digite seu email: </label>
                    <input type="email" class="form-control" name="user" id="user">
                </div>

                <!-- grupo para inserir senha -->
                <div class="form-group">
                    <label for="senha" class="col-form-label">Crie uma senha: </label>
                    <input type="password" class="form-control" name="senha" id="senha">
                </div>

                <!-- botão para finalizar cadastro -->
                <button type="submit" name="submit" value="Finalizar Cadastro" class="btn btn-primary">Finalizar Cadastro</button>
            </form>
        </main>

    </div>
</body>
</html>
