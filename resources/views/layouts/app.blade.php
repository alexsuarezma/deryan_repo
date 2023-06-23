{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href=" {{ asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" {{ asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{ asset('/dist/css/adminlte.min.css') }}">

  @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
@livewireScripts

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src=" {{ asset('/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notificaciones</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 nuevos mensajes
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user-alt"></i>
          <!-- <span class="badge badge-danger navbar-badge">3</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('profile.show') }}" class="dropdown-item d-flex justify-content-center">
              Configuración de la cuenta
          </a>
          <div class="dropdown-divider"></div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.closest('form').submit();" class="dropdown-item dropdown-footer">Cerrar Sesión</a>
        </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <span class="brand-text font-weight-light pl-2">App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ ucwords(Auth::user()->name) }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ Route::is('dashboard') ? 'menu-open' : '' }}">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(\Auth::user()->can('usuario.create') || \Auth::user()->can('usuario.index') || \Auth::user()->can('usuario.editar.avanzado') || \Auth::user()->can('usuario.desactivar.activar'))
            <li class="nav-header">SEGURIDAD</li>
            <li class="nav-item {{ Route::is('user.create') || Route::is('user.index') || Route::is('user.update') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link" style="{{ Route::is('user.create') || Route::is('user.index') || Route::is('user.update') ? 'background-color:#B5AD0E' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @can('usuario.crear')
                  <li class="nav-item">
                    <a href="{{ route('user.create') }}" class="nav-link {{ Route::is('user.create') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Crear Usuario</p>
                    </a>
                  </li>
                @endcan
                @can('usuario.index')
                  <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link {{ Route::is('user.index') || Route::is('user.update') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista de Usuarios</p>
                    </a>
                  </li>
                @endcan
              </ul>
            </li>
          @endif
          @if(\Auth::user()->can('rol.crear') || \Auth::user()->can('rol.index') || \Auth::user()->can('rol.editar.avanzado') || \Auth::user()->can('rol.asignar') || \Auth::user()->can('rol.revocar'))
            <li class="nav-item {{ Route::is('role.index') | Route::is('role.create.get') | Route::is('role.update.get') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link" style="{{ Route::is('role.create') || Route::is('role.index') || Route::is('role.update') ? 'background-color:#B5AD0E' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Roles
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @can('rol.index')
                  <li class="nav-item">
                    <a href="{{ route('role.index') }}" class="nav-link {{ Route::is('role.index') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Lista de Roles</p>
                    </a>
                  </li>
                @endcan
              </ul>
            </li>
          @endif
          <li class="nav-header">GESTION INTERNA</li>
          @if( \Auth::user()->can('repositorio.ver') || \Auth::user()->can('grupo.carnicos.ver') )
            <li class="nav-item {{ Route::is('datos.grupo.carnicos') | Route::is('datos.repositorio') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link" style="{{ Route::is('datos.grupo.carnicos') | Route::is('datos.repositorio') ? 'background-color:#B5AD0E' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Datos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @can('grupo.carnicos.ver')
                  <li class="nav-item">
                    <a href="{{ route('datos.grupo.carnicos') }}" class="nav-link {{ Route::is('datos.grupo.carnicos') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Grupo de Carnicos</p>
                    </a>
                  </li>
                @endcan
                @can('repositorio.ver')
                  <li class="nav-item">
                    <a href="{{ route('datos.repositorio') }}" class="nav-link {{ Route::is('datos.repositorio') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Repositorio</p>
                    </a>
                  </li>
                @endcan
              </ul>
            </li>
          @endif

          @if( \Auth::user()->can('reporte.prediccion.ventas') || \Auth::user()->can('reporte.asociacion.productos') || \Auth::user()->can('reporte.segmento.clientes') )
            <li class="nav-item {{ Route::is('analisis.segmento.clientes') | Route::is('analisis.asociacion.productos') | Route::is('analisis.prediccion.ventas') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link" style="{{ Route::is('analisis.segmento.clientes') | Route::is('analisis.asociacion.productos') | Route::is('analisis.prediccion.ventas') ? 'background-color:#B5AD0E' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Análisis de Información
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @can('grupo.carnicos.ver')
                  <li class="nav-item">
                    <a href="{{ route('analisis.segmento.clientes') }}" class="nav-link {{ Route::is('analisis.segmento.clientes') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Segmento de Clientes</p>
                    </a>
                  </li>
                @endcan
                @can('repositorio.ver')
                  <li class="nav-item">
                    <a href="{{ route('analisis.asociacion.productos') }}" class="nav-link {{ Route::is('analisis.asociacion.productos') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Asociación de Productos</p>
                    </a>
                  </li>
                @endcan
                @can('reporte.prediccion.ventas')
                  <li class="nav-item">
                    <a href="{{ route('analisis.prediccion.ventas') }}" class="nav-link {{ Route::is('analisis.prediccion.ventas') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Predicción de Ventas</p>
                    </a>
                  </li>
                @endcan
              </ul>
            </li>
          @endif

          @if( \Auth::user()->can('reporte.datos.obtenidos') )
            <li class="nav-item {{ Route::is('datos.obtenidos.index') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link" style="{{ Route::is('datos.obtenidos.index') ? 'background-color:#B5AD0E' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Módulo de Reportes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @can('reporte.datos.obtenidos')
                  <li class="nav-item">
                    <a href="{{ route('datos.obtenidos.index') }}" class="nav-link {{ Route::is('datos.obtenidos.index') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Reporte / Datos obtenidos</p>
                    </a>
                  </li>
                @endcan
              </ul>
            </li>
          @endif

          @if( \Auth::user()->can('resultados.index') )
            <li class="nav-item {{ Route::is('resultados.index') ? 'menu-open' : '' }}">
              <a href="{{ route('resultados.index') }}" class="nav-link {{ Route::is('resultados.index') ? 'active' : '' }}" style="{{ Route::is('resultados.index') ? 'background-color:#B5AD0E' : '' }}">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Resultados
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>
          @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-3">
    <!-- Page Heading -->
    @if (isset($header))
      <div class="col-sm-6 mb-3">
        <h3 class="m-0">{{ $header }}</h3>
      </div>
    @endif
    {{ $slot }}
  </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy;  Deryan Manosalvas.</strong>
        Todos los derechos reservados.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.1.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/js/validation.js') }}"></script>
    <script src="{{ asset('/dist/js/pages/dashboard2.js') }}"></script>
  </body>
</html>
