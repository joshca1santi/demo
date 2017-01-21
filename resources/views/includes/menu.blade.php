<div class="panel panel-primary">
                <div class="panel-heading">Menú</div>

                <div class="panel-body">
                 <ul class="nav nav-pills nav-stacked">
                  @if (auth()->check())
                  <li><a href="#">Dashboard</a></li>
				  <li><a href="#">Ver incidencias</a></li>
				  <li><a href="#">Reportar incidencias</a></li>
				  <li><a href="#">Administrador</a></li>
				@else

				@endif


				  <li><a href="#">Bienvenido</a></li>
				  <li><a href="#">Instrucciones</a></li>
				  <li><a href="#">Créditos</a></li>


                  </ul>
                </div>
            </div>








