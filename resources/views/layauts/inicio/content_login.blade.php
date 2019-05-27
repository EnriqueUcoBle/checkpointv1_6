	
<div class="contenedor_contenido">
	<div class="contenido">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<div class="login-wrapper">
					<form action="profile" method="POST">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Bienvenido a CheckPoint</h6>
			               @csrf
			                <input class="form-control" name="usuario" type="text" placeholder="correo">
			                <input class="form-control" name="pass"  type="password" placeholder="contraseña">
			                <div class="action">
			                    
								<button class="btn btn-primary signup" type="submit">Iniciar Sesion </button>
			                </div>                
			            </div>
			        </div>
					</form> 
			        <div class="already">
			            <p>No tienes una cuenta?</p>
			            <a href="registro">Registrate</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>
	</div>
</div>
	