<div class="col-sm-7">
	<div class="row">
		<form action="forms.php" id="formQuery" class="form-horizontal" role="form" >
				<!-- form data -->
				<fieldset>
						<legend>Buscar Por:</legend>
						<div class="radio-inline">
							<label>
							    <input type="radio" name="optionsRadios" id="radioActivo" value="Activo" checked>
							    	Activo
							</label>
						</div>

						<div class="radio-inline">
							<label>
							   	<input type="radio" name="optionsRadios" id="radioEspera" value="En Espera" >
							    	En Espera
							</label>
						</div>

						<div class="radio-inline">
							<label>
								<input type="radio" name="optionsRadios" id="radioPromovido" value="Promovido A Intellisys" >
									Promovido A Intellisys
							</label>
						</div>

						<div class="radio-inline">
							<label>
								<input type="radio" name="optionsRadios" id="radioReprobado" value="Reprobado" >
									Reprobado
							</label>
						</div>

						<div class="radio-inline">
							<label>
								<input type="radio" name="optionsRadios" id="radioDisponible" value="Disponible para intellisys">
									Disponible para intellisys
							 </label>
						</div>	

						<br>

						<div class="">
							<label>
								<input type="radio" name="optionsRadios" id="radioUni" value="filtUni">
									Universidad
							</label>
							<div class="col-sm-6">
								<select name="selUniversidad" id="selUniversidad" class="form-control">
									<option value="">PUCCM</option>
									<option value="">Utesa</option>
									<option value="">OyM</option>
									<option value="">UASD</option>
								</select>
							</div>
							<input type="submit" value="Buscar">
						</div>
							
					</fieldset>
		
		</form>
	</div>


<!-- filtrado-->
	<div class="row" id="divFilter">
		<form action="">
			<div class="form-group">
				<label for="txtFiltrar" class="col-sm-2 control-label">Nombre:</label>
				<div class="col-sm-5">
					<input type="text" id="txtFiltrar" name="txtFiltrar" class="form-control">	
				</div>
					<input type="submit" value="Filtrar">
			</div>	
				
		</form>
	</div>

	<div class="row">
		<table class="table table-striped" id="grid">
			<tr>
				<th>Nombre</th>
				<th>Universidad</th>
				<th>Status</th>
				<th colspan="2">Accion</th>
			</tr>
			<tr>
				<td>Luis Javier</td>
				<td>OyM</td>
				<td>Activo</td>
				<td class="danger">Borrar</td>
				<td class="success">Editar</td>
			</tr>		

			<tr>
				<td>Luis Javier</td>
				<td>OyM</td>
				<td>Activo</td>
				<td class="danger">Borrar</td>
				<td class="success"><a href="engine.php?edit=">Editar</a></td>
			</tr>
		</table>
	</div>

</div>