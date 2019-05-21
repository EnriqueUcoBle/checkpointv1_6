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
			@include("layauts.dashboard.parts.update_info")
		</div>
    </div>
    @include("layauts.dashboard.parts.js")
  </body>
</html>