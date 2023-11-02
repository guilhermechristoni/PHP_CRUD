<?php
include('config.php');

if(isset($_POST['submit']))
{
    //print_r('Nome: ' .$_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' .$_POST['email']);
    //print_r('<br>');
    //print_r('CPF: ' .$_POST['cpf']);

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $endereco_rua = $_POST['endereco_rua'];
    $cidade = $_POST['cidade'];
    $data_nasc = $_POST['data_nasc'];
    $horario = $_POST['horario'];
    $data = $_POST['data'];

    $result_clientes = mysqli_query($mysqli, "INSERT INTO table_clientes(cpf,cidade,endereco_rua,email,data_nasc) VALUES ('$cpf','$cidade','$endereco_rua','$email','$data_nasc')");
    $result_reserva = mysqli_query($mysqli, "INSERT INTO table_reserva(cpf,nome,horario,data) VALUES ('$cpf','$nome','$horario','$data')");
}

$sql = "SELECT * FROM table_reserva ORDER BY id_reserva DESC";

$result = $mysqli->query($sql);

print_r($result);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
</body>
</html>