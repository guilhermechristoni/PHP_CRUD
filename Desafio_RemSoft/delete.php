<?php
    include_once('config.php');

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM table_reserva res
        LEFT JOIN table_clientes AS cli ON cli.cpf=res.cpf WHERE id_reserva=$id";


        $result = $mysqli->query($sqlSelect);

        if ($result->num_rows > 0) 
        {
            $sqlDelete = "UPDATE table_reserva SET ativo=0 WHERE id_reserva=$id";
            $resultDelete = $mysqli->query($sqlDelete);
        } 

        $registros_deletar = "INSERT IGNORE INTO registros (id_reserva, acao, updateAt) VALUE ($id, 'deletar', NOW())";
        $result= $mysqli->query($registros_deletar);
    }
    header('Location: tabelas.php');
?>