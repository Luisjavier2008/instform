<?php select("estudiante"); ?>
<form action="forms.php" id="formNew" class="form-horizontal" role="form" >
		<div class="col-sm-5">
			<!-- form data -->
			<div class="form-group">
				<label for="txtNombre" class="col-sm-3 control-label">Nombre:</label>
				<div class="col-sm-8">
					<input type="text" id="txtNombre" name="txtNombre" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="selUniversidad" class="col-sm-3 control-label">Universidad:</label>	
				<div class="col-sm-8">
					<select name="selUniversidad" id="selUniversidad" class="form-control">
						<option value=""></option>
						<option value="">PUCCM</option>
						<option value="">Utesa</option>
						<option value="">O&M</option>
						<option value="">UASD</option>
					</select>
				</div>

			</div>
			
			<div class="form-group">
				<label for="txtTelefono" class="col-sm-3 control-label">Telefono:</label>
				<div class="col-sm-8">
					<input type="text" id="txtTelefonotxtTelefono" name="txtTelefono" class="form-control">	
				</div>
			</div>	

			<div class="form-group">
				<label for="txtDireccion" class="col-sm-3 control-label">Direccion:</label>
				<div class="col-sm-8">
					<input type="text" id="txtDireccion" name="txtDireccion" class="form-control">	
				</div>
			</div>		

			<div class="form-group">
				<label for="txtCorreo" class="col-sm-3 control-label">Correo:</label>
				<div class="col-sm-8">
					<input type="text" id="txtCorreo" name="txtCorreo" class="form-control">	
				</div>
			</div>		

			<div class="form-group">
				<label for="txtNota" class="col-sm-3 control-label">Nota:</label>
				<div class="col-sm-8">
					<textarea name="" id="" rows="8" class="form-control">
				
					</textarea>
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
			    <input type="radio" name="optionsRadios" id="radioActivo" value="Activo" checked>
			    Activo
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioEspera" value="En Espera" >
			    En Espera
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioPromovido" value="Promovido A Intellisys" >
			    Promovido A Intellisys
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioReprobado" value="Reprobado" >
			    Reprobado
			  </label>
			</div>

			<div class="radio">
			  <label>
			    <input type="radio" name="optionsRadios" id="radioDisponible" value="Disponible para intellisys">
			    Disponible para intellisys
			  </label>
			</div>

		</div>

</form>