<?php
session_start();
$d = 0;
$name = $_SESSION['login'];
include 'reserve.php';
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">

    <title> Jardim do Lago </title>

    <meta name="viewport" content="width=device-width">

    <!-- Styles -->
    <link href="./css/app.css" rel="stylesheet">
</head>

<style>
body{
      background-image: url("./imgs/bg.png");
      background-repeat: no-repeat;
      background-size: 100% auto;
}

.footer {
   position: fixed;
   bottom:0;
   width:100%;
   height:5%;   /* Height of the footer */
}
</style>

<body title="Escola do Jardim do lago">
   <div class="app">
   <!-- navbar -->
   <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav" aria-expanded="false">
               <span class="sr-only"> Abrir ou fechar menu </span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> JdL </a>
         </div>

         <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav">
              <!-- Navbar -->
              <li> <a href="index.php"> Início <span class="sr-only"> (Atual) </span> </a> </li>
              <li  class="active"> <a href="emprestimo.php"> Emprestar Livro </a> </li>
              <li> <a href="sugestao.php"> Sugestão </a> </li>
              <li> <a href="devolucao.php"> Devolver Livro </a> </li>
              <li> <a href="cadastro.php"> Cadastrar Livro </a> </li>
              <li> <a href="cancelar.php"> Reserva </a> </li>
               <!-- navbar -->

            </ul>
               <!-- Direita da navbar -->
            <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  <li> <a href="login.php">  Login </a> </li>
                  <li> <a href="register.php"> Register </a> </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="container col-md-10 col-xs-10 col-sm-10 col-md-offset-1 col-xs-offset-1 col-sm-offset-1" role="main">
      <div class="row">

        <!-- Content -->
        <ol class="breadcrumb">
          <li><a href="index.php">Início</a></li>
          <li class="active"> <a  href="emprestimo.php"> Reserva </a> </li>
        </ol>

        <div class="panel panel-default">
           <div class="panel-heading"> <h3> Reserva </h3> </div>
           <div class="panel-body">
             <?php if($d == 1)echo"O livro foi Reservado com sucesso!"; ?>
           </div>
         </div>
        <!-- Content -->

      </div>
   </div>
</div>
<footer class="footer">
   <div class="container">
      <div class="panel panel-responsive text-center">
         Todos os direitos reservados.
      </div>
   </div>
</footer>
</body>
</html>
