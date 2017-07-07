
	<div  class="panel panel-info">
      <div class="panel-heading">LOGIN</div>
		<div class="panel-body">

	<form id="formlogin" class="form-inline">
		<div class="form-group">
      <h3>INGRESO</h3>
      
        <input type="mail" id="mail" placeholder="Mail" class="form-control"> <br><br>
        <input type="password" id="password" placeholder="Password" class="form-control"><br><br>
        <input type="button" name="ingresar" value="Ingresar" onclick='ingresarusuario()' class='btn btn-success'>
        <input type="reset" name="Borrar" value="Borrar Datos" class="btn btn-danger">
        <br><br>
        <p class="remember_me">

        <input type="button" name="ingresar" value="Administrador" onclick='botonadministrador()' class='btn btn-primary'>
        <input type="button" name="ingresar" value="Vendedor" onclick='botonvendedor()' class='btn btn-primary'>
        <input type="button" name="ingresar" value="Comprador" onclick='botoncomprador()' class='btn btn-primary'>

      </form>

    </div>
	
