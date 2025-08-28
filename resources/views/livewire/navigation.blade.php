<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
  
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('profile.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('profile.index') ? 'active' : '' }}"
                href="{{ route('profile.index') }}" wire:navigate>
                <i class="fas fa-user text-blue"></i> Perfil
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Ejemplos</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
      

        <li class="nav-item {{ Request::route()->named('patients.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('patients.index') ? 'active' : '' }}"
                href="{{ route('patients.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> Paciente
            </a>
        </li>
                <li class="nav-item {{ Request::route()->named('dentits.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dentits.index') ? 'active' : '' }}"
                href="{{ route('dentits.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> dentista
            </a>
        </li>

                <li class="nav-item {{ Request::route()->named('appointments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('appointments.index') ? 'active' : '' }}"
                href="{{ route('appointments.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> cita
            </a>
        </li>    

                <li class="nav-item {{ Request::route()->named('dental-records.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dental-records.index') ? 'active' : '' }}"
                href="{{ route('dental-records.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> registro dental
            </a>
        </li>

                <li class="nav-item {{ Request::route()->named('treatments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('treatments.index') ? 'active' : '' }}"
                href="{{ route('treatments.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> tratamiento
            </a>
        </li>

            <li class="nav-item {{ Request::route()->named('payments.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('payments.index') ? 'active' : '' }}"
                href="{{ route('payments.index') }}" wire:navigate>
                <i class="fas fa-dove text-orange"></i> pagos
            </a>
        </li>


    </ul>
</div>
