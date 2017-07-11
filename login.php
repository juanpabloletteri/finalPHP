
	<script>
    document.getElementById('mail').addEventListener('input', function() {
      campo = event.target;
      valido = document.getElementById('emailOK');
          
      emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

      if (emailRegex.test(campo.value)) {
        valido.innerText = "Email válido";
      } else {
        valido.innerText = "Email incorrecto";
      }
    });
  </script>
  
  <div  class="panel panel-info">
      <div class="panel-heading">LOGIN</div>
		<div class="panel-body">

	<form id="formlogin" class="form-inline">
		<div class="form-group">
      <h3>INGRESO</h3>
      
        <input type="mail" id="mail" placeholder="Mail" class="form-control"> <span id="emailOK"></span> <br><br>
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
	
