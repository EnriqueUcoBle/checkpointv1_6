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
					            <div class="panel-title">Catalogo de Docentes</div>
					          
					            <div class="panel-options">
					              <a href="alta_docente" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  
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