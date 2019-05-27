 <div class="col-md-2">
				@yield("menu")
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="admin"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                    <li><a href="admin_user"><i class="glyphicon glyphicon-cog"></i>  Administrar Usuarios</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-signal"></i> Estadisticas por:
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="estadisticas_plantel"><i class="glyphicon glyphicon-stats"></i> Plantel</a></li>
                            <li><a href="estadisticas_semestre"><i class="glyphicon glyphicon-stats"></i> Semestre</a></li>
                            <li><a href="estadisticas_turno"><i class="glyphicon glyphicon-stats"></i> Turno</a></li>
                            <li><a href="estadisticas_grupo"><i class="glyphicon glyphicon-stats"></i> Grupo</a></li>
                            <li><a href="estadisticas_alumno"><i class="glyphicon glyphicon-stats"></i> Alumno</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-floppy-disk"></i> Generar Reporte PDF por alumno:
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="generated_total"><i class="glyphicon glyphicon-stats"></i> Total</i></a></li>
                            <li><a href="generated_kardex"><i class="glyphicon glyphicon-stats"></i> Kardex</a></li>
                            <li><a href="generated_reportes"><i class="glyphicon glyphicon-stats"></i> Historial de Reportes</a></li>
                            <li><a href="generated_asistencia"><i class="glyphicon glyphicon-stats"></i> Asistencia</a></li>
                        </ul>
                    </li>
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