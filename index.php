<?php
include("conexao.php");
if(isset($_POST['$bt_nome'])){
    $nome = $_POST['bt_nome'];
    $senha = $_POST['bt_senha'];
    $mysqli->query("INSERT INTO tabela_login (login, senha)
    values ('$nome', '$senha')")
    or die($mysqli->error);
}
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <h1>Para Fazer - Revisão - Cadastrar</h1>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Login</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="bt_nome" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="bt_senha">
                </div> 
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Redefinir</button>
           </form>
        </div>   
    </body>
    </html>