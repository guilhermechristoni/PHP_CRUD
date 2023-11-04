<?php
include('config.php');

if (isset($_POST['submit'])) {
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

    $result_clientes = mysqli_query($mysqli, "INSERT INTO table_clientes(cpf,nome,cidade,endereco_rua,email,data_nasc) VALUES ('$cpf','$nome','$cidade','$endereco_rua','$email','$data_nasc')");
    $result_reserva = mysqli_query($mysqli, "INSERT INTO table_reserva(cpf,horario,data) VALUES ('$cpf','$horario','$data')");
}

$sql = "SELECT * FROM table_reserva res
        LEFT JOIN table_clientes AS cli ON cli.cpf=res.cpf WHERE res.ativo = 1
        ORDER BY res.id_reserva DESC";
        


$result = $mysqli->query($sql);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <a href="index.php">Voltar</a>
    <h1>RESERVAS</h1>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Endereço Rua</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Horario reservado</th>
                    <th scope="col">Data reservada</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id_reserva'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['cpf'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['cidade'] . "</td>";
                    echo "<td>" . $user_data['endereco_rua'] . "</td>";
                    echo "<td>" . $user_data['data_nasc'] . "</td>";
                    echo "<td>" . $user_data['horario'] . "</td>";
                    echo "<td>" . $user_data['data'] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=$user_data[id_reserva]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                            </a>
                            <a href='delete.php?id=$user_data[id_reserva]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                        </td>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>