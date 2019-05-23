<!DOCTYPE html>
<html>
  <head>
    <title>@yield('titulo','CheckPointV3')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("layauts.dashboard.parts.head")


  </head>
  <body>
			@include("layauts.dashboard.parts.header")
    <div class="page-content">
    	<div class="row">
		  @include("layauts.dashboard.parts.menu_secretario")
				<div class="row">
	  				<div class="col-md-9">
						<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Alta de Alumno & Padre de Familia</div>
					          
					            <div class="panel-options">
					              <a href="alta_alumno" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form" action="" method="POST">
								  <div class="form-group">
								    <label   class="col-sm-2 control-label">Nombre del alumno:</label>
								    <div class="col-sm-10">
								      <input type="text" name="nombre_alumno" class="form-control"  placeholder="ingrese el nombre del alumno">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Apellidos del alumno:</label>
								    <div class="col-sm-10">
								      <input type="text" name="apellido_alumno" class="form-control"  placeholder="ingrese los apellidos del alumno">
								    </div>
								  </div>
									 <div class="form-group">
											<label class="control-label col-md-2">Sexo:</label>
											<div class="col-md-4">
												<select class="form-control input-sm" name="sexo_alumno">
													<option>masculino</option>
													<option>femenino</option>
																					
												</select>
											</div>
										</div>
                  <div class="form-group">
								    <label  class="col-sm-2 control-label">Numero de control:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="matricula" placeholder="ingresa la matricula del alumno">
								    </div>
								  </div>
									<div class="form-group">
								    <label  class="col-sm-2 control-label">Fecha de nacimiento:</label>
								    <div class="col-sm-10">
								      <input type="date" class="form-control" name="fecha_alumno" >
								    </div>
								  </div>
									<div class="form-group">
								    <label   class="col-sm-2 control-label">Semestre actual:</label>
								    <div class="col-sm-10">
								      <input type="text" name="num_semestre_alumno" class="form-control"  placeholder="numero de semestre">
								    </div>
								  </div>
								  <div class="form-group">
								    <label   class="col-sm-2 control-label">Nombre del tutor:</label>
								    <div class="col-sm-10">
								      <input type="text" name="nombre_tutor" class="form-control"  placeholder="ingrese el nombre del tutor">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Apellidos del tutor:</label>
								    <div class="col-sm-10">
								      <input type="text" name="apellido_tutor" class="form-control"  placeholder="ingrese los apellidos del tutor">
								    </div>
								  </div>
									 
									<div class="form-group">
											<label class="control-label col-md-2">Sexo:</label>
											<div class="col-md-4">
												<select class="form-control input-sm" name="sexo_tutor">
													<option>masculino</option>
													<option>femenino</option>
																					
												</select>
											</div>
										</div>
										<div class="form-group">
								    <label  class="col-sm-2 control-label">Fecha de nacimiento:</label>
								    <div class="col-sm-10">
								      <input type="date" class="form-control" name="fecha_tutor" >
								    </div>
								  </div>
                  <div class="form-group">
								    <label  class="col-sm-2 control-label">Numero de Whatsapp:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="whatsapp" placeholder="Whatsapp o numero de celular">
								    </div>
								  </div>
								<div class="form-group">
								    <label  class="col-sm-2 control-label">Email:</label>
								    <div class="col-sm-10">
								      <input type="email" name="correo" class="form-control"  placeholder="ingrese el correo del tutor">
								    </div>
								  </div>
										<div class="form-group">
								    <label  class="col-sm-2 control-label">Direccion:</label>
								    <div class="col-sm-10">
								      <input type="email" name="direccion" class="form-control"  placeholder="ingrese la direccion del tutor">
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Registar</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
			</div>
    	</div>
		
		</div>
    </div>
	@include("layauts.dashboard.parts.js")
  </body>
</html>