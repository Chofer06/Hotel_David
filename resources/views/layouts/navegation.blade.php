<!--nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}" style="color:#777"><span style="font-size:15pt">&#9820;</span> Hotel La Rivera</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('reservas') && ! Request::is('reservas/reservas')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/reservas')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Hotel
                        </a>
                    </li>

                    <li class="nav-item {{  Request::is('reservas/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalog/create')}}">
                            <span>&#10010</span> Servicios
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('reservas/reservas') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/reservas/reservas')}}">
                            <span>&#10010</span> Reservas
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/contacto')}}">
                            <span>&#10010</span> Contactos
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}" ><h1><strong>HOTEL LA RIVERA</strong></h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>HOTEL</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{url('/hotel/vision')}}">Mision y Vision</a>
                    <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicacion</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>SERVICIOS</strong></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
                    <a class="dropdown-item" href="{{url('/servicios/eventos')}}">Eventos</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('reservas')}}"><strong>RESERVAS</strong><span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{url('contactos')}}"><strong>CONTACTOS</strong><span class="sr-only">(current)</span></a>
            </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><strong>BUSCAR</strong></button>
        </form>
    </div>
</nav>