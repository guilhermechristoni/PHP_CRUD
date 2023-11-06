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
                <input type="text" class="cpf" name="cpf" id="cpf" value="" required/>
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
            <a href="tabelas.php">Acessar tabela de reservas</a>
        </fieldset>
    </form>

        <form action="restaurar.php" method="post">
            <fieldset>
                <legend>>Restaurar uma resarva</legend>
                <p>
                <label for="">ID</label>
                <input type="number" name="IdRestaurar" id="IdRestaurar" value="" required/>
                <label for="">CPF</label>
                <input type="text" class="cpf" name="CpfRestaurar" id="CpfRestaurar" value="" required/>
                <script src="main.js"></script>
            </p>
                <button type="submit" name="submit_restaurar" id="submit_restaurar">Restaurar</button>
                <a href="tabelas_inativos.php">Acessar reservas inativas</a>

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

    $duplicate = "SELECT cpf,data FROM table_reserva WHERE cpf='$cpf' AND data='$data'";

    $result_duplicate = $mysqli->query($duplicate);

    if($result_duplicate->num_rows == 0){
        $result_clientes = mysqli_query($mysqli, "INSERT INTO table_clientes(cpf,cidade,endereco_rua,email,data_nasc) VALUES ('$cpf','$cidade','$endereco_rua','$email','$data_nasc')");
    }
    else{
        echo "<script>alert('Reserva já cadastrada no CPF atual');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }

}
?>
</body>
</html>