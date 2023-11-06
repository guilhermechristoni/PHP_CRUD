<?php       
    include('config.php');

    if (isset($_POST['submit_restaurar']))
    {
        $CpfRestaurar = $_POST['CpfRestaurar'];
        $IdRestaurar = $_POST['IdRestaurar'];
        $idSearch = $mysqli->query("SELECT * FROM table_reserva WHERE id_reserva='$IdRestaurar'");
        $cpfSearch = $mysqli->query("SELECT * FROM table_reserva WHERE cpf='$CpfRestaurar'");
        $confirmSearch = $mysqli->query("SELECT * FROM table_reserva WHERE id_reserva='$IdRestaurar' AND cpf='$CpfRestaurar'");
        $ativoSearch = $mysqli->query("SELECT ativo FROM table_reserva WHERE cpf='$CpfRestaurar' AND ativo IS NOT NULL")->fetch_row()[0];
        
        
        if($idSearch->num_rows == 0 ){
            echo "<script>alert('Reserva no ID não encontrado');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
        else if($cpfSearch->num_rows == 0){
            echo "<script>alert('O CPF não foi encontrado');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
        else if($ativoSearch == 1){
            echo "<script>alert('Reserva no CPF/ID atual já restaurada');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
        else if($confirmSearch->num_rows == 0){
            echo "<script>alert('ID e CPF inseridos não são da mesma reserva.');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
        else{
        $restaurar = "UPDATE table_reserva SET ativo = 1 WHERE cpf='$CpfRestaurar' AND id_reserva='$IdRestaurar'";
        $resultRestaurar = $mysqli->query($restaurar);

        $idReserva = "SELECT id_reserva from table_reserva WHERE cpf='$CpfRestaurar'";
        $resultIdReserva = $mysqli->query($idReserva)->fetch_row();
        $stringReserva= implode(", ", $resultIdReserva);

        $registros_restaurar = "INSERT IGNORE INTO registros (id_reserva, acao, updateAt) VALUE ($stringReserva, 'restaurar', NOW())";
        $result= $mysqli->query($registros_restaurar);
        header('Location: tabelas.php');
    }
    }
?>