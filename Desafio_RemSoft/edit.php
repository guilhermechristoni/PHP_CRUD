<?php
include_once('config.php');
if (!empty($_GET['id'])) {
    //print_r('Nome: ' .$_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' .$_POST['email']);
    //print_r('<br>');
    //print_r('CPF: ' .$_POST['cpf']);

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM table_reserva res
    LEFT JOIN table_clientes AS cli ON cli.cpf=res.cpf WHERE id_reserva=$id";


    $result = $mysqli->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $id = $user_data['id_reserva'];
            $nome = $user_data['nome'];
            $cpf = $user_data['cpf'];
            $email = $user_data['email'];
            $endereco_rua = $user_data['endereco_rua'];
            $cidade = $user_data['cidade'];
            $data_nasc = $user_data['data_nasc'];
            $horario = $user_data['horario'];
            $data = $user_data['data'];
            $idCliente = "SELECT id from table_clientes WHERE cpf='$cpf'";

        }
    } else {
        header('Location: tabelas.php');
    }
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <a href="tabelas.php">Voltar</a>
    <form action="saveEdit.php" method="post">
        <fieldset>
            <legend>Editar Reserva</legend>
            <p>
                <label for="">Nome</label>
                <input type="text" name="nome" id="" value="<?php echo $nome ?>" />
            </p>
            <p>
                <label for="">CPF</label>
                <input type="text" class="cpf" name="cpf_edit" id="cpf_edit" value="<?php echo $cpf ?>" maxlength="14" required />
                <script src="main.js"></script>
            </p>
            <p>
                <label for="">E-mail</label>
                <input type="text" name="email" id="" value="<?php echo $email ?>" />
            </p>
            <p>
                <label for="">Endereço (RUA)</label>
                <input type="text" name="endereco_rua" id="" value="<?php echo $endereco_rua ?>" />
            </p>
            <p>
                <label for="">Cidade</label>
                <input type="text" name="cidade" id="" value="<?php echo $cidade ?>" />
            </p>
            <p>
                <label for="">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="" value="<?php echo $data_nasc ?>" />
            </p>
            <p>
                <label for="">Horario para corte</label>
                <input type="time" name="horario" id="" value="<?php echo $horario ?>" required />
            </p>
            <p>
                <label for="">Data do corte</label>
                <input type="date" name="data" id="" value="<?php echo $data ?>" required />
            </p>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="cpf_antigo" value="<?php echo $cpf ?>">
            <button type="submit" name="update" id="update">Salvar Alteração</button>
        </fieldset>
    </form>
</body>

</html>