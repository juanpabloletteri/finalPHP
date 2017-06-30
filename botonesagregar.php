
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
			<input type="number" id="precio" placeholder="Precio" class="form-control" >
		</div>
		<div class="form-group">
			<label for="tipo">Tipo: </label>
			<select id="tipo" class="form-control" >
				<option value="Solido">Sólido</option>
				<option value="Liquido">Líquido</option>
			</select>
		</div>
			<input type='button' class='btn btn-success' value='Agregar' onclick='AgregarMaterial()'>
			<div class="form-group" id="error">
			</div>
		</div>

    </div>
	</form>
