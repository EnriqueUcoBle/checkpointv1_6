<?php 
include "../resources/views/include/session.php";

if(isset($_SESSION['id'])){
  echo "session existente....";
}
try{
?>
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
		  @include("layauts.dashboard.parts.menu_admin")
      @include("layauts.dashboard.parts.info")
			
		</div>
    </div>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
<?php } catch (Exception $e) { return view('login');} ?>