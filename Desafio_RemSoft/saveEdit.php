<!-- <?php

include('config.php');


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf_novo = $_POST['cpf'];
    $cpf_antigo = $_POST['cpf_antigo'];
    $email = $_POST['email'];
    $endereco_rua = $_POST['endereco_rua'];
    $cidade = $_POST['cidade'];
    $data_nasc = $_POST['data_nasc'];
    $horario = $_POST['horario'];
    $data = $_POST['data'];

    $idCliente = "SELECT id from table_clientes WHERE cpf='$cpf_antigo'";

    $resultIdCliente = $mysqli->query($idCliente)->fetch_row();

    $stringCliente = implode(", ", $resultIdCliente);



    print_r($stringCliente);


    $sqlUpdate = "UPDATE table_reserva SET horario='$horario',data='$data' WHERE id_reserva='$id'";
    $sqlUpdate2 = "UPDATE table_clientes SET nome='$nome',email='$email',data_nasc='$data_nasc',cidade='$cidade',cpf='$cpf_novo',endereco_rua='$endereco_rua' WHERE id='$stringCliente'";



    //$sqlCliUpdate = "UPDATE table_clientes SET cidade='$cidade' WHERE id_reserva='$id'";

    $result =$mysqli->query($sqlUpdate);
    $result = $mysqli->query($sqlUpdate2);
    $registros_editar = "INSERT IGNORE INTO registros (id_reserva, acao, updateAT) VALUE ($id, 'editou', NOW())";
    $result= $mysqli->query($registros_editar);
    print_r($result_registro);
}
header('Location: tabelas.php');
?> -->