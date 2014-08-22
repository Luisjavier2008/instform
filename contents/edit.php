
<form action="" id="formEdit" class="form-horizontal" role="form" method="POST">
		<div class="col-sm-5">
			<!-- form data -->
			<div class="form-group">
				<label for="txtNombre" class="col-sm-3 control-label">Nombre:</label>
				<div class="col-sm-8">
					<input type="text" id="txtNombre" name="txtNombre" class="form-control" value="<?php echo $student['nombre']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="selUniversidad" class="col-sm-3 control-label">Universidad:</label>	
				<div class="col-sm-8">
					<select name="selUniversidad" id="selUniversidad" class="form-control">
						<option><?php echo $student['universidad']; ?></option>
						<option>PUCCM</option>
						<option>Utesa</option>
						<option>O&amp;M</option>
						<option>UASD</option>
					</select>
				</div>

			</div>
			
			<div class="form-group">
				<label for="txtTelefono" class="col-sm-3 control-label">Telefono:</label>
				<div class="col-sm-8">
					<input type="text" id="txtTelefono" name="txtTelefono" class="form-control" value="<?php echo $student['telefono']; ?>">	
				</div>
			</div>	

			<div class="form-group">
				<label for="txtDireccion" class="col-sm-3 control-label">Direccion:</label>
				<div class="col-sm-8">
					<input type="text" id="txtDireccion" name="txtDireccion" class="form-control" value="<?php echo $student['direccion']; ?>">	
				</div>
			</div>		

			<div class="form-group">
				<label for="txtCorreo" class="col-sm-3 control-label">Correo:</label>
				<div class="col-sm-8">
					<input type="text" id="txtCorreo" name="txtCorreo" class="form-control" value="<?php echo $student['correo']; ?>">	
				</div>
			</div>		

			<div class="form-group">
				<label for="txtNota" class="col-sm-3 control-label">Nota:</label>
				<div class="col-sm-8">
					<textarea name="txtNota" id="txtNota" rows="8" class="form-control"><?php echo $student['nota']; ?></textarea>
				</div>
			</div>
			<input type="submit" value="Guardar">
		</div>
		<!--start right col -->
		<div class="col-sm-5">
			<div>
				<h3>Status</h3>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioActivo" value="Activo" <?php echo $status['Activo']; ?>>
			    Activo
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioEspera" value="En Espera" <?php echo $status['En Espera']; ?>>
			    En Espera
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioPromovido" value="Promovido A Intellisys" <?php echo $status['Promovido A Intellisys']; ?> >
			    Promovido A Intellisys
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioReprobado" value="Reprobado" <?php echo $status['Reprobado']; ?>>
			    Reprobado
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioDisponible" value="Disponible para intellisys" <?php echo $status['Disponible para intellisys']; ?>>
			    Disponible para intellisys
			  </label>
			</div>

		</div>

		<input type="hidden" name="new" value="new">
		<input type="hidden" name="SaveEdit" value="SaveEdit">
		<input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">

</form>