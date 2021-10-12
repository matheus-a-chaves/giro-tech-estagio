<?php
include("conexao.php");
//EM ANDAMENTO
$emAndamento_id = $_GET['idem'];

$query = "SELECT * FROM emandamento WHERE emAndamento_id = $emAndamento_id";
$result = mysqli_query($conexao,$query);
$exibir =  mysqli_fetch_array($result);
$nome_finalizado = $exibir["emAndamento_nome"];

// EXCLUIR EM ANDAMENTO
$query2 = "DELETE FROM emandamento WHERE emAndamento_id = $emAndamento_id";
$result2 = mysqli_query($conexao, $query2);
$exibir2 = mysqli_fetch_array($result2);


//INSERIR NO FINALIZADO
$query_finalizado = "INSERT INTO finalizado(finalizado_nome) VALUES ('$nome_finalizado')";
$result_finalizado = mysqli_query($conexao, $query_finalizado);
$exibir_finalizado = mysqli_fetch_array($result_finalizado);
header("location:../../index.php");

?>