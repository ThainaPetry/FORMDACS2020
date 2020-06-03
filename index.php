<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Academia</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a href="index.php?id=<?=$row[0]?>"class="navbar-brand" href="#">Clientes academia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="covid.php?id=<?=$row[0]?>"class="nav-link" href="#">Covid-19</a>
          </li>
          <li class="nav-item">
            <a href="contato.php?id=<?=$row[0]?>"class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
  <?php
      include 'dbconect.php';
      $sql = "select * from academia";
      $result = mysqli_query($con,$sql);

  ?>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <p class="lead">
        <p> Olá, para mantermos o funcionamente durante a pandemia do Covid-19 tivemos que nos adequarmos aos cuidados para evitar contágio.
            <br>
            Favor, avisar aos clientes para que verifiquem os cuidados a serem seguidos durante a permanencia na academia:
        </p>
        <p>
            - Uso de máscara obrigatório.
            <br>
            - Manter o cabelo preso.
            <br>
            - Distânciamento de 1,5m entre as pessoas.
            <br>
            - Uso de toalhas pessoal obrigatórios.
            <br>
            - Permanência no máximo de 60 minutos na academia.
            <br>
            - Acesso na academia sem o uso da digítal.
            <br>
            - Bebedouros e vestiários fechados.
        </p>
        <h3><a href="formcliente.php" class="btn btn-primary btn-lg btn-block">Marcar Horário</a></h3>
        <legend><h3>Listagem de clientes</h3></legend>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Nome</th>
              <th scope="col">Horário</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            while($row = $result -> fetch_row()){
            ?>
            <tr>
              <td scope="col"><?=$row[0]?></td>
              <td><?=$row[1]?></td>
              <td><?=$row[2]?></td>
              <td><a href="formcliente.php?id=<?=$row[0]?>" class= "btn btn-warning">Alterar</a>
                  <a href="confirmaremovecliente.php?id=<?=$row[0]?>" class= "btn btn-danger">Deletar</a>
                  
              </td>
           </tr>
           <?php 
           }
           ?>
          </tbody> 
        </table>
      </p>
    </header>

   

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
