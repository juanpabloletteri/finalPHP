<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<title>Corralon Mansilla</title>

	<link rel="icon" href="./dist/favicon.png">
  <script src="./dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="./dist/sweetalert.css">

	  <script src="./funciones.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div id="panel">
<nav  class="navbar navbar-inverse">
  <div  class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CORRALON MANSILLA</a>
    </div>
      
    <ul class="nav navbar-nav navbar-right">
      <li><a onclick='borrarcookie()' href='#'><span class='glyphicon glyphicon-log-in'></span> Borrar Cookies</a></li>
      <li><a onclick="login()" href="#"><span class="glyphicon glyphicon-user"></span> Loguearse</a></li>
    </ul>
  </div>
</nav>
</div>
<div id="usuario" class="container"><h3><?php if(isset($_COOKIE['ultimo'])) echo("Ultimo visitante: ".$_COOKIE['ultimo']) ?></h3></div>
<div id="botones" class="container"></div>
<div id="tabla" class="container">
<img class="img-responsive" src="dist/corralon.jpg" alt="Chania">
</div>
<div id="tablausuarios" class="container"></div>

</body>
</html>