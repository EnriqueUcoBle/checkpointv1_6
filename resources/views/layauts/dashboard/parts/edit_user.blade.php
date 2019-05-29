	<div class="row">
	<form class="form-horizontal" action="update_password"  method="POST" >
		@csrf
	  				<div class="col-md-9">
						<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Info Usuario</div>
					          
					            <div class="panel-options">
					              <a href="" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					
								  <fieldset>						
								
										<div class="form-group">
											<label>Nombre</label>
											<input class="form-control"  readonly placeholder="<?php echo $results->nombre; ?>" type="text">
											<input class="form-control" hidden  name="id" hidden value="<?php echo $user->id; ?>"  type="text">
										</div>
                    <div class="form-group">
											<label>Apelllidos</label>
										<input class="form-control" readonly placeholder="<?php echo $results->apellidos; ?>" type="text">
										</div>
										 <div class="form-group">
											<label>Usuario</label>
										<input class="form-control"  redonly placeholder="<?php echo $user->usuario; ?>" type="text">
											<input class="form-control" name="tipo" value="<?php echo $user->tipo; ?>" redonly placeholder="<?php echo $user->tipo; ?>" type="text">
										</div>
                    <div class="form-group">
											<label>Nueva Contraseña </label>
											<input class="form-control" name="pass" type="text">
										</div>
										<div class="form-group">
											<label>Desea eliminar este Usuario</label>
											<select name="option" class="form-control input-sm">
													<option>no</option>
													<option>si</option>
											
												</select>
											</div>
									</fieldset>
									<div>
										
										<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Actualizar Contraseña</button>
											<div class="btn btn-danger">
											<i class="fas fa-window-close"></i>
											  Cancelar   
										</div>
									</div>
						
								
							
			  				</div>
			  			</div>
	  				</div>
						</form>
			</div>