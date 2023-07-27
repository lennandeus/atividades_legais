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
        
    </body>
</html>