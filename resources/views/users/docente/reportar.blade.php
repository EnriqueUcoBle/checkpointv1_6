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
		  @include("layauts.dashboard.parts.menu_docente")
      @include("layauts.dashboard.parts.reportar")
			
		</div>
    </div>
     @include("layauts.dashboard.parts.js")
  </body>
</html>