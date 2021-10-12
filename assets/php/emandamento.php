<?php
include("conexao.php");
//EM ANDAMENTO
$tarefa_id = $_GET['idta'];

//BUSCAR TAREFA
$query_tarefa = "SELECT * FROM tarefa WHERE tarefa_id = $tarefa_id ";
$result_tarefa = mysqli_query($conexao,$query_tarefa);
$exibir_tarefa =  mysqli_fetch_array($result_tarefa);
$nome_tarefa = $exibir_tarefa["tarefa_nome"];


// EXCLUIR EM ANDAMENTO
$query2 = "DELETE FROM tarefa WHERE tarefa_id = $tarefa_id";
$result2 = mysqli_query($conexao, $query2); 
mysqli_fetch_array($result2);

//INSERIR NO FINALIZADO
$query_emAndamento = "INSERT INTO emandamento(emAndamento_nome) VALUES ('$nome_tarefa')";
$result_emAndamento = mysqli_query($conexao, $query_emAndamento);
$exibir_emAndamento = mysqli_fetch_array($result_emAndamento);
header("location:../../index.php");

?>