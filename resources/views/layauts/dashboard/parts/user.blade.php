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
													<th scope="col">Eliminar</th>
											
										</tr>
									</thead>
									<tbody>
										@foreach ( $usuarios as $usuario )
												
									
											<tr>
												<th scope="row"><?php echo $usuario->id; ?></th>
												<td><?php echo $usuario->tipo; ?></td>
												<td><?php echo $usuario->usuario; ?></td>
												<td><?php echo $usuario->pass; ?></td>
												<td><a href="edit_user/<?php echo  $usuario->id; ?>"><button type="button"  class="btn btn-warning"><i class="fas fa-user-edit"></i></button></a> </td>
												<td><a href="edit_user/<?php echo  $usuario->id; ?>"><button type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i></button></a></td>
																						
												</tr>
												@endforeach
									</tbody>
									</table>
									
			  				</div>
			  			</div>
	  				</div>
			</div>