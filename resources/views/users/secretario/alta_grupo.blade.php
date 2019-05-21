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
					            <div class="panel-title">Alta de grupos:</div>
					            <div class="panel-options">
					              <a href="alta_grupo" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
                    
                    <div class="form-group">
											<label class="control-label col-md-2">Semestre</label>
											<div class="col-md-4">
												<select class="form-control input-sm">
													<option>primero</option>
													<option>segundo</option>
													<option>tercero</option>
													<option>cuarto</option>
													<option>quinto</option>
													<option>sexto</option>
											
												</select>
											</div>
										</div>
                     <div class="form-group">
											<label class="control-label col-md-2">Grupo</label>
											<div class="col-md-4">
												<select class="form-control input-sm">
													<option>A</option>
													<option>B</option>
                          <option>C</option>
                          <option>D</option>
                          <option>E</option>
                          <option>F</option>
                          <option>G</option>
                          <option>H</option>
                          <option>I</option>
                          <option>J</option>
                          <option>K</option>
												</select>
											</div>
										</div>
                    <div class="form-group">
											<label class="control-label col-md-2">Periodo</label>
											<div class="col-md-4">
												<select class="form-control input-sm">
													<option>2019-A</option>
													<option>2019-B</option>
												</select>
											</div>
										</div>
								  <div class="form-group">
											<label class="col-md-2 control-label" for="select-1">Seleccione al Docente:</label>
											<div class="col-md-10">
												<select class="form-control" id="select-1">
													<option>profesor 1</option>
													<option>profesor 2</option>
                          <option>profesor 3</option>
												</select> 
											</div>
										</div>
                     <div class="form-group">
											<label class="col-md-2 control-label" for="select-1">Seleccione al Turno:</label>
											<div class="col-md-10">
												<select class="form-control" id="select-1">
													<option>VESPERTINO</option>
													<option>MATUTINO</option>
												</select> 
											</div>
										</div>
                     <div class="btn btn-primary">
											<i class="fa fa-save"></i>
											  Crear Grupo 
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