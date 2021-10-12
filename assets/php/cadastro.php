<?php
include("conexao.php");
$tarefa = $_POST['tarefa'];

if($tarefa == ""){
    header("location:../../index.php");
}
else{
    $query = "INSERT INTO tarefa(tarefa_nome) VALUES ('$tarefa')";
    $result = mysqli_query($conexao, $query);
    $exibir = mysqli_fetch_array($result);
    header("location:../../index.php");
}

?>