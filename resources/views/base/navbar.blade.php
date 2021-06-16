    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-lg">
        <a href="{{route('inicio.admin')}}" class="navbar-brand d-flex align-items-center"><i class="fa fa-home" aria-hidden="true">&nbsp;</i> 
          <strong>Inicio</strong>
        </a>
        <img class="navbar-brand" src="{{asset('img/logo.png')}}" height="40px" width="40px" alt="logo">
        &nbsp;&nbsp;
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            @auth
            
            @if(Auth::user()->id_rol == 1)
            <!--Para administrador de sistema -->
            <li class="nav-item">
              <a class="nav-link" href="#">Usuarios</a> 
            </li>
            
            <!--tactico -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Reportes Tácticos</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('tactico.periodo') }}">Ventas por periodo</a>
                <a class="dropdown-item" href="{{ route('tactico.categoria') }}">Ventas por categoria</a>
                <a class="dropdown-item" href="{{ route('tactico.rotacion') }}">Rotación de inventario</a>
                <a class="dropdown-item" href="{{ route('tactico.masvendidos') }}">Más vendidos</a>

              </div>
            </li>

            <!--estrategico -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Reportes Estratégicos</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('estrategico.fechaVencimiento') }}">Productos por fechas de vencimiento</a>
                <a class="dropdown-item" href="{{ route('estrategico.estacion') }}">Productos más vendidos</a>
                <a class="dropdown-item" href="{{ route('estrategico.compras') }}">Compras por período</a>
                <a class="dropdown-item" href="{{ route('estrategico.margenUtilidad') }}">Mejor margen de utilidad</a>
              </div>
            </li>

            @endif

            @if(Auth::user()->id_rol == 2)
            <!--tactico -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Reportes Tácticos</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('tactico.periodo') }}">Ventas por periodo</a>
                <a class="dropdown-item" href="{{ route('tactico.categoria') }}">Ventas por categoria</a>
                <a class="dropdown-item" href="{{ route('tactico.rotacion') }}">Rotación de inventario</a>
                <a class="dropdown-item" href="{{ route('tactico.masvendidos') }}">Más vendidos</a>

              </div>
            </li>
            @endif

            @if(Auth::user()->id_rol == 3)
            <!--estrategico -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Reportes Estratégicos</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('estrategico.fechaVencimiento') }}">Productos por fechas de vencimiento</a>
                <a class="dropdown-item" href="{{ route('estrategico.estacion') }}">Productos más vendidos</a>
                <a class="dropdown-item" href="{{ route('estrategico.compras') }}">Compras por período</a>
                <a class="dropdown-item" href="{{ route('estrategico.margenUtilidad') }}">Mejor margen de utilidad</a>
              </div>
            </li>
            @endif

          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="caret"></span>
                <span class="far fa-user"></span> </a>

                <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="navbarDropdown">
                  <i class="dropdown-item text-right">
                    {{head(explode(' ', trim(Auth::user()->nombres))) }}  {{head(explode(' ', trim(Auth::user()->apellidos))) }}
                  </i>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-right" href="{{ route('usuario.perfil') }}">
                    Mi perfil &nbsp;<i class="fas fa-info"></i>
                  </a>
                  <a class="dropdown-item text-right" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Cerrar sesión <i class="fas fa-user-lock" aria-hidden="true"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
          @endauth
          @guest
          <!-- Código si hubiera invitado -->
          @endguest
        </div>
      </nav>
    </header>
