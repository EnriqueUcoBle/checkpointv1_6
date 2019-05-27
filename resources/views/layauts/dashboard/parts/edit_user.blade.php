	<div class="row">
		<form action="edit_user/<?php echo $user->id; ?>" method="post">
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
			  					<form class="form-horizontal" role="form">
								  <fieldset>						
										<div class="form-group">
											<label>Nombre</label>
											<input class="form-control"  readonly="readonly" placeholder="<?php echo $user->usuario; ?>" type="text">
										</div>
                    <div class="form-group">
											<label>Apelllidos</label>
										<input class="form-control" readonly="readonly" placeholder="apellidos del usuario" type="text">
										</div>
										 <div class="form-group">
											<label>Usuario</label>
										<input class="form-control" name="usuario" placeholder="<?php echo $user->usuario; ?>" type="text">
										</div>
                    <div class="form-group">
											<label>Nueva Contraseña </label>
											<input class="form-control" name="pass" placeholder="<?php echo $user->pass; ?>" type="text">
										</div>
								
									</fieldset>
									<div>
										
										<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Actualizar Datos</button>
											<div class="btn btn-danger">
											<i class="fas fa-window-close"></i>
											  Cancelar   
										</div>
									</div>
							
								</form>
							
			  				</div>
			  			</div>
	  				</div>
						</form>
			</div>