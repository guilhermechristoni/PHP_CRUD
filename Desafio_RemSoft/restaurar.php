<?php       
    include('config.php');

    if (isset($_POST['submit_restaurar']))
    {
        $CpfRestaurar = $_POST['CpfRestaurar'];
        print_r($CpfRestaurar);
        $restaurar = "UPDATE table_reserva SET ativo = 1 WHERE cpf='$CpfRestaurar'";
        $resultRestaurar = $mysqli->query($restaurar);
    }
    header('Location: tabelas.php');
?>