 <div class="col-md-2">
				@yield("menu")
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    
                    <li class="current"><a href="profile_tutor"><i class="fas fa-user"></i>  Perfil</a></li>
                    <li><a href="resumen"><i class="fas fa-chalkboard-teacher"></i>  Resumen General</a></li>
                    <li><a href="kardex"><i class="fas fa-graduation-cap"></i>  Kardex</a></li>
                    <li><a href="reportes"><i class="fas fa-stream"></i>  Reportes</a></li>
                    <li><a href="asistencias"><i class="fas fa-clipboard-list"></i>  Asistencias</a></li>
                      <li><a href="individual"><i class="fas fa-clipboard-list"></i>  Calificaiones</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="fas fa-user-circle"></i>  Mi Cuenta:
                            <span class="caret pull-right"></span>
                         </a>
                         <ul>
                            <li><a href="update_info_tutor"><i class="fas fa-database"></i>  Actulizar Datos</a></li>
                            <li><a href="logout"><i class="fas fa-door-open"></i>  Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
</div>