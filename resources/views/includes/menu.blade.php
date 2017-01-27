<div class="panel panel-primary">
                <div class="panel-heading">Menú</div>

                <div class="panel-body">
                 <ul class="nav nav-pills nav-stacked">
                  @if (auth()->check())
                  <li><a href="#">Dashboard</a></li>
				  <li><a href="#">Ver incidencias</a></li>
				  <li><a href="reportar">Reportar incidencias</a></li>
				   <li role="presentation" class="dropdown">
				   <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrador <span class="caret"></span></a>
				    <ul class="dropdown-menu">
				      <li><a href="usuarios">Usuarios</a></li>
					  <li><a href="proyectos">Proyectos</a></li>
					  <li><a href="config">Configuracion</a></li>
				    </ul>
				  </li>
				@else

				@endif


				  <li><a href="#">Bienvenido</a></li>
				  <li><a href="#">Instrucciones</a></li>
				  <li><a href="#">Créditos</a></li>


                  </ul>
                </div>
            </div>








