<?php
    include("assets/php/conexao.php"); 
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Tarefas</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" href="assets/img/fivicon.png">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark ">
      <div class="collapse navbar-collapse" id="navbarCollapse">
      <a href="#" style="text-decoration:none"><img width="40px" src="assets/img/fivicon.png"><span class="font-giro"> GIRO LIST</span></a>
      </div>
    </nav>
  </header>


  <div class="d-flex p-4 text-white justify-content-around">
  <div class="caixas">
     <label>Não iniciado</label>
  <?php
  
$query = "SELECT * FROM tarefa";
$result = mysqli_query($conexao,$query);


while( $exibir =  mysqli_fetch_array($result)) {
  ?>
   <form class="caixasl " action="assets/php/cadastro.php" method="POST">
   <label for="Data de inicio">
   <?php echo $exibir['tarefa_nome'];?>
   <a href="assets/php/editar.php?id=<?php echo $exibir['tarefa_id'];?>">
    <img width="20px" src="assets/img/editar.png" title="Editar">
  </a> 
      <a href="assets/php/deletar.php?id=<?php echo $exibir['tarefa_id'];?>">
         <img width="20px" src="assets/img/lixeira.png" title="Quer mesmo Excluir?">
      </a>
      <a href="assets/php/emandamento.php?idta=<?php echo $exibir['tarefa_id'];?>">
       <img width="20px" src="assets/img/seta.png" title="Passar para Em Andamento"> </a>
    </label>
<?php } ?>
     <div class="form-group">
       <input type="text" class="form-control" name="tarefa" placeholder="Nome da Tarefa">
       <button type="submit" class="botaofeito"><img width="20px" src="assets/img/adicionar.png" title="Adicionar tarefa"></button>  
      </div>
   </form>

  </div>

  <div class="caixas">
  <label>Em Andamento</label>

  <?php
  
  $query = "SELECT * FROM emandamento";
  $result = mysqli_query($conexao,$query);
  
  
  while( $exibir =  mysqli_fetch_array($result)) {
    ?>
     <form class="caixasl " action="assets/php/cadastro.php" method="POST">
     <label for="Data de inicio">
     <?php echo $exibir['emAndamento_nome'];?>
        <a href="assets/php/excluir_emandamento.php?id=<?php echo $exibir['emAndamento_id'];?>">
           <img width="20px" src="assets/img/lixeira.png" title="Quer mesmo Excluir?">
        </a>
       <a href="assets/php/etapa.php?idem=<?php echo $exibir['emAndamento_id'];?>">
        <img width="20px" src="assets/img/seta.png" title="Passar para Finalizados"></a>
      </label>
  <?php } ?>

     </form>

  </div>
  
  <div class="caixas">
  <label>Finalizados</label>

  <?php
  
  $query = "SELECT * FROM finalizado";
  $result = mysqli_query($conexao,$query);


  while( $exibir =  mysqli_fetch_array($result)) {
  ?>
   <form class="caixasl " action="assets/php/cadastro.php" method="POST">
   <label for="Data de inicio">
   <?php echo $exibir['finalizado_nome'];?>

      <a href="assets/php/excluir_finalizado.php?id=<?php echo $exibir['finalizado_id'];?>">
         <img width="20px" src="assets/img/lixeira.png" title="Quer mesmo Excluir?">
      </a>
  
    </label>
<?php } ?>
   </form>
  </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>

  <script src="assets/js/jquery-3.6.0.min.js"> </script>
  <script src="assets/js/form-cadastro.js"> </script>
  <script src="assets/js/checkbox.js"> </script>




</body>

</html>