<!DOCTYPE html>
<html>
  <head>
    <title>@yield('titulo','CheckPointV3')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="../vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="../vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="../vendors/tags/css/bootstrap-tags.css" rel="stylesheet">
    <link href="css/forms.css" rel="stylesheet">

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
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label   class="col-sm-2 control-label">Nombre del alumno:</label>
								    <div class="col-sm-10">
								      <input type="text" name="nombre_alumno" class="form-control"  placeholder="ingrese el nombre">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Apellidos del alumno:</label>
								    <div class="col-sm-10">
								      <input type="text" name="apellido_alumno" class="form-control"  placeholder="ingrese los apellidos">
								    </div>
								  </div>
                  <div class="form-group">
								    <label  class="col-sm-2 control-label">Numero de control:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="numero_alumno" placeholder="ingrese el numero de control">
								    </div>
								  </div>
									
								  <div class="form-group">
								    <label   class="col-sm-2 control-label">Nombre del tutor:</label>
								    <div class="col-sm-10">
								      <input type="text" name="nombre_tutor" class="form-control"  placeholder="ingrese el nombre">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Apellidos del tutor:</label>
								    <div class="col-sm-10">
								      <input type="text" name="apellido_tutor" class="form-control"  placeholder="ingrese los apellidos">
								    </div>
								  </div>
                  <div class="form-group">
								    <label  class="col-sm-2 control-label">Numero de Whatsapp:</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="whatsapp" placeholder="ingrese el numero de control">
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
	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>