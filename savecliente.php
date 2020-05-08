<?php
    $id        = $_POST['txtId'];
    $nome      = $_POST['txtNome'];
    $horaini   = $_POST['txtHorario'];
    
    var_dump($id);
    var_dump($nome);
    var_dump($horaini);
    
    $con = mysqli_connect("localhost","bob","bob","univille");
    if($id == "0"){
        $insert = "insert into academia(nome, horaini) values(?, ?);";
        $stmt = mysqli_prepare($con, $insert);
        mysqli_stmt_bind_param($stmt, "ss", $nome, $horaini);
        mysqli_stmt_execute($stmt);
    }else{
        $update = "update academia set nome=?, horaini=? where codigo=?";
        $stmt = mysqli_prepare($con, $update);
        mysqli_stmt_bind_param($stmt, "sss", $nome, $horaini, $id);
        mysqli_stmt_execute($stmt);
    }
    
    header('Location: '. 'index.php');
?>