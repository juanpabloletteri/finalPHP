
	<div class="panel panel-warning">
      <div class="panel-heading">MODIFICAR</div>
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
		<input type='button' class='btn btn-success' value='Aceptar' onclick='AceptarModificacion()'>
		<input type='button' class='btn btn-danger' value='Cancelar' onclick='botonesagrega()'>
		<input type="hidden" id="codigo">
		</div>
    </div>
	</form>
