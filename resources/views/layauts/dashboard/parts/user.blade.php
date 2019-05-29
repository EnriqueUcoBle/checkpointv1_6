<div class="row">
	  				<div class="col-md-9">
						<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Administracion de Usuarios tipo Capturista, Tutores y Docente</div>
					          
					            <div class="panel-options">
					              <a href="profile_cap" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					            </div>
					        </div>						
									<div class="panel-body">
									<div class="panel-title">Usuarios</div>
									<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Tipo</th>
											<th scope="col">Usuario</th>
											<th scope="col">Password</th>
											<th scope="col">Editar</th>
											
											
										</tr>
									</thead>
									<tbody>
										@foreach ( $usuarios as $usuario )
												
									<form action="edit_user" method="post">
										@csrf
											<tr>
												<input type="text" name="id" hidden value="<?php echo $usuario->id; ?>"><th scope="row"><?php echo $usuario->id; ?></th>
												<input type="text" name="tipo" hidden value="<?php echo $usuario->tipo; ?>"><td><?php echo $usuario->tipo; ?></td>
												<td><?php echo $usuario->usuario; ?></td>
												<td><?php echo $usuario->pass; ?></td>
												<td><button type="submit"  class="btn btn-warning"><i class="fas fa-user-edit"></i></button></td>
												
																						
												</tr>
									</form>			
												@endforeach
									</tbody>
									</table>
									
			  				</div>
			  			</div>
	  				</div>
			</div>