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
            <a href="index.php?id=<?=$row[0]?>"class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Covid-19</a>
          </li>
          <li class="nav-item">
            <a href="contato.php?id=<?=$row[0]?>"class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <?php
    $id=$_GET['id'];
  ?>
  
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <legend align="center"><h3>Decreto de liberação de academias</h3></legend>
        <p>
            As regras estão escritas na portaria número 258/2020:
    
            O número de clientes dentro da academia deve ser, no máximo, 30% da capacidade;
            <br>
            Cada aluno pode ficar, no máximo, 60 minutos na academia;
            <br>
            Os alunos não podem usar o celular durante a prática da atividade física;
            <br>
            A academia deve organizar os alunos em grupos de horários. Esse grupo deve começar e parar as atividades no mesmo período de tempo;
            <br>
            Deve haver um intervalo de 15 minutos para a chegada do próximo grupo, permitindo que se faça a limpeza da academia antes de mais alunos começarem os exercícios;
            <br>
            Na entrada da academia deve ter álcool 70% ou outra forma de higienizar as mãos;
            <br>
            Alunos e funcionários devem higienizar as mãos com álcool 70% na entrada e na saída do estabelecimento, sempre que utilizar os equipamentos e durante a realização das atividades;
            <br>
            Os equipamentos devem ser higienizados com álcool 70% após o uso;
            <br>
            Equipamentos que registrem a digital do cliente, como algumas catracas, devem ser desativados. O controle de entrada e saída de alunos deve ser feito por um funcionário;
            <br>
            É obrigatório o uso de máscaras por funcionários e clientes dentro da academia;
            <br>
            É obrigatório ter a distância de 1,5 metro entre as pessoas;
            <br>
            É obrigatório o uso de toalha durante a prática da atividade física;
            <br>
            Os bebedouros devem ser desativados. Cada aluno deverá levar sua água, que não pode ser compartilhada;
            <br>
            Guarda-volumes não podem ser usados;
            <br>
            O uso de vestiários para banhos ou trocas de roupas só é permitido para alunos que usem a piscina;
            <br>
            Para as piscinas, deve ser disponibilizado álcool 70% antes que o aluno toque na escada; os alunos devem usar chinelos no ambiente onde fica a piscina; as escadas, bordas e balizas devem ser higienizadas após o fim da aula;
            <br>
            Caso haja lanchonete na academia, só poderá ser feita entrega no balcão. O consumo no local não é permitido.
        </p>
        </p>
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
