<?php
include("conexao.php");
$tarefa_id = $_GET['id'];
$tarefa_nome = $_POST['tarefa'];


$query = "UPDATE tarefa SET tarefa_nome='$tarefa_nome' WHERE tarefa_id = $tarefa_id";
$result = mysqli_query($conexao, $query);
mysqli_fetch_array($result);

header("location:../../index.php");
?>