<?php
include("conexao.php");

$id = $_GET['id'];

$query = "DELETE FROM finalizado WHERE finalizado_id = $id";
$result = mysqli_query($conexao, $query);
$exibir = mysqli_fetch_array($result);
header("location:../../index.php");

?>