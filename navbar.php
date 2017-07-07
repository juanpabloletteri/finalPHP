
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Corralon Mansilla</a>
    </div>
      
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo($_SESSION['mail']); ?> </a></li>
      <li><a onclick="cerrarsesion()" href="#"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
    </ul>
  </div>
</nav>