<?php
include_once('config.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <form action="tabelas.php" method="post">
        <fieldset>
            <legend>Reserve seu horario</legend>
            <p>
                <label for="">Nome</label>
                <input type="text" name="nome" id="" value="" />
            </p>
            <p>
                <label for="">CPF</label>
                <input type="text" name="cpf" id="cpf" value="" maxlength="14" required/>
                <script src="main.js"></script>
            </p>
            <p>
                <label for="">E-mail</label>
                <input type="text" name="email" id="" value="" />
            </p>
            <p>
                <label for="">Endereço (RUA)</label>
                <input type="text" name="endereco_rua" id="" value="" />
            </p>
            <p>
                <label for="">Cidade</label>
                <input type="text" name="cidade" id="" value="" />
            </p>
            <p>
                <label for="">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="" value="" />
            </p>
            <p>
                <label for="">Horario para corte</label>
                <input type="time" name="horario" id="" value="" required />
            </p>
            <p>
                <label for="">Data do corte</label>
                <input type="date" name="data" id="" value="" required />
            </p>
            <button type="submit" name="submit" id="submit">Reservar</button>
        </fieldset>
    </form>
    <?php
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
}
?>
</body>

</html>