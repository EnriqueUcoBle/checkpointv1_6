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
					            <div class="panel-title">Alta de Docentes</div>
					          
					            <div class="panel-options">
					              <a href="alta_docente" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label   class="col-sm-2 control-label">Nombre del Docente:</label>
								    <div class="col-sm-10">
								      <input type="text" name="nombre" class="form-control"  placeholder="ingrese el nombre">
								    </div>
								  </div>
								  <div class="form-group">
								    <label  class="col-sm-2 control-label">Apellidos del Docente:</label>
								    <div class="col-sm-10">
								      <input type="text" name="apellido" class="form-control"  placeholder="ingrese los apellidos">
								    </div>
								  </div>
                                  <div class="form-group">
								    <label  class="col-sm-2 control-label">Correo:</label>
								    <div class="col-sm-10">
								      <input type="email" class="form-control" name="correo" placeholder="correo electronico">
								    </div>
								  </div>
									
								  <div class="form-group">
								    <label   class="col-sm-2 control-label">Telefono celular:</label>
								    <div class="col-sm-10">
								      <input type="number" name="telefono" class="form-control"  placeholder="Whatsapp o telefono celular">
								    </div>
								  </div>
                                  <div class="form-group">
								    <label class="col-sm-2 control-label">Direccion:</label>
								    <div class="col-sm-10">
								      <textarea name="direccion" class="form-control" placeholder="describe el lugar donde reside el docente.." rows="5"></textarea>
								    </div>
								  </div>
                                  <div class="form-group">
								    <label class="col-sm-2 control-label">Descripcion:</label>
								    <div class="col-sm-10">
								      <textarea name="descripcion" class="form-control" placeholder="pequeña descripcion del docente (opcional)..." rows="3"></textarea>
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