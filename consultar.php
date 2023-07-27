<?php
include('conexao.php');
$sql_consultar = "SELECT * FROM tabela_login";

$consulta = $mysqli->query($sql_consultar) or die ($mysql->error);
$quantidade_login = $consulta->num_rows; // Retornar quantidade de login
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
        <h1>Lista de Cadastros</h1>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Senha</th>
            </tr>

                <?php
                    while ($pedidos = $retorno_consulta -> fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $logins['id_login']; ?></td>
                    <td><?php echo $pedidos['login']; ?></td>
                    <td><?php echo $pedidos['senha']; ?></td>
                </tr>
                <?php
                    }
                
                ?>
            
        </table>
        <a class="btn btn-warning" href="index.php">Voltar</a>

        </div>
    </body>
</html>