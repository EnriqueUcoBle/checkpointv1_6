 <div class="col-md-2">
				@yield("menu")
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    
                    <li class="current"><a href="profile_cap"><i class="fas fa-user"></i>  Perfil</a></li>
                    <li><a href="alta_alumno"><i class="fas fa-user-graduate"></i>  Alta alumno</a></li>
                    <li><a href="alta_docente"><i class="fas fa-chalkboard-teacher"></i>  Alta de Docentes</a></li>
                    <li><a href="alta_docente"><i class="fas fa-tasks"></i>  Alta de Materias</a></li>
                    <li><a href="alta_grupo"><i class="fas fa-user-friends"></i>  Alta de Grupos</a></li>
                    <li><a href="calificaciones"><i class="fas fa-graduation-cap"></i>  Calificaciones</a></li>
                    <li><a href="catalogo_alumno"><i class="fas fa-stream"></i>  Catalogo de Alumnos</a></li>
                    <li><a href="catalogo_docente"><i class="fas fa-clipboard-list"></i>  Catalogos de Docentes</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="fas fa-user-circle"></i>  Mi Cuenta:
                            <span class="caret pull-right"></span>
                         </a>
                         <ul>
                            <li><a href="update_info"><i class="fas fa-database"></i>  Actulizar Datos</a></li>
                            <li><a href="logout"><i class="fas fa-door-open"></i>  Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
</div>