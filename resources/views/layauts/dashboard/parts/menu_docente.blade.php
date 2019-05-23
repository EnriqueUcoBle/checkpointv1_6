 <div class="col-md-2">
				@yield("menu")
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="docente"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
                    <li class="submenu">
                            <a href="#">
                               <i class="glyphicon glyphicon-calendar"></i>  Lista de asistencias
                               <span class="caret pull-right"></span>
                            </a>
                            <ul>
                               <li><a href="ver_listas_calificiones"><i class="fas fa-database"></i>  Ver listas</a></li>
                               <li><a href="list_asist"><i class="glyphicon glyphicon-stats"></i>  Pasar lista</a></li>
                           </ul>
                    </li>
                    <li class="submenu">
                            <a href="#">
                               <i class="glyphicon glyphicon-pencil"></i>  Lista de Calificaiones
                               <span class="caret pull-right"></span>
                            </a>
                            <ul>
                               <li><a href="ver_listas_calificaciones"><i class="fas fa-database"></i>  Ver listas</a></li>
                               <li><a href="lista_cal"><i class="glyphicon glyphicon-stats"></i>  Subir</a></li>
                           </ul>
                    </li>
                    <li><a href="reportar"><i class="glyphicon glyphicon-stats"></i> Reportar Alumno</a></li>
                  
                </ul>
            </div>
</div>