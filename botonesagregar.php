
	<div class="panel panel-info">
      <div class="panel-heading">AGREGAR</div>
		<div class="panel-body">

	<form id="formabm" class="form-inline">
		<div class="form-group">
			<label for="nombre">Nombre: </label>
			<input type="text" id="nombre" placeholder="Nombre" class="form-control" >
		</div>
		<div class="form-group">
			<label for="precio">Precio: </label>
			<input type="text" id="precio" placeholder="Precio" class="form-control" >
		</div>
		<div class="form-group">
			<label for="tipo">Tipo: </label>
			<select id="tipo" class="form-control" >
				<option value="0">Sólido</option>
				<option value="1">Líquido</option>
			</select>
		</div>
		<input type='button' class='btn btn-success' value='Agregar' onclick='AgregarMaterial()'>
		</div>
    </div>
	</form>
