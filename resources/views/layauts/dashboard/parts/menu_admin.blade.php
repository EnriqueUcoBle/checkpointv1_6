 <div class="col-md-2">
				@yield("menu")
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.blade.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.blade.php"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.blade.php"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.blade.php"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.blade.php"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.blade.php"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.blade.php"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.blade.php">Login</a></li>
                            <li><a href="signup.blade.php">Signup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
</div>