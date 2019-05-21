 <div class="col-md-2">
				@yield("menu")
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="secretario"><i class="glyphicon glyphicon-home"></i> Informacion General</a></li>
                    <li><a href="alta_alumno"><i class="glyphicon glyphicon-floppy-open"></i> Alta alumno</a></li>
                    <li><a href="alta_docente"><i class="glyphicon glyphicon-floppy-open"></i> Alta de Docentes</a></li>
                    <li><a href="alta_docente"><i class="glyphicon glyphicon-floppy-open"></i> Alta de Materias</a></li>
                    <li><a href="alta_grupo"><i class="glyphicon glyphicon-floppy-open"></i> Alta de Grupos</a></li>
                    <li><a href="calificaciones"><i class="glyphicon glyphicon-list-alt"></i> Calificaciones</a></li>
                    <li><a href="catalogo_alumno"><i class="glyphicon glyphicon-list-alt"></i> Catalogo de Alumnos</a></li>
                    <li><a href="catalogo_docente"><i class="glyphicon glyphicon-list-alt"></i> Catalogos de Docentes</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-user"></i> Mi Cuenta:
                            <span class="caret pull-right"></span>
                         </a>
                         <ul>
                            <li><a href="perfil"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
                            <li><a href="secretario"><i class="glyphicon glyphicon-cog"></i> Actulizar Datos</a></li>
                            <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
</div>