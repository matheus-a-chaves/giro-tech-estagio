<?php
    include("conexao.php"); 
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../img/fivicon.png">
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
       <a href="../../index.php" style="text-decoration:none"> <img width="40px" src="../img/fivicon.png"><span class="font-giro"> GIRO LIST</span></a>
      </div>
    </nav>
</header>


  <div class="container ">

  

  <?php 
  
  $query = "SELECT * FROM tarefa WHERE tarefa_id = $id ";
  $result = mysqli_query($conexao, $query);

  while($exibir =  mysqli_fetch_array($result)) {
    ?>


    <div id="form_edit">
      <div class="col-12">
        <form action="editar_dados.php?id=<?php echo $exibir['tarefa_id'];?>" method="POST">
 
          <div class="form-group">
            <label for="Nome">Tarefa</label>
            <input type="text" class="form-control" name="tarefa" value="<?php echo $exibir['tarefa_nome'];?>">
          </div>

          <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
      </div>
    </div>

 <?php } ?>
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

  <script src="../js/jquery-3.6.0.min.js"> </script>
  <script src="../js/form-editar.js"> </script>



</body>

</html>