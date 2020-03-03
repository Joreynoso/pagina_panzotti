<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Panzotti Pastas - Admin</title>
    <!-- Custom fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Page level plugin CSS-->
    <link rel="stylesheet" href="{!! asset('css/dataTables.bootstrap4.css') !!}">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{!! asset('css/sb-admin.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark panzotti-nav static-top">
        <a class="navbar-brand mr-1" href="{{ route('principal')}}">Panzotti Admin</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">


            <li style="margin: 5px" class="mt-3 text-white salir span">
                <span style="color: #2494be;"> {{ Auth::user()->name }}</span>
            </li>

            <li class="mt-3 text-white salir">
                | Volver a la pagina
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link" title="salir">
                        <button class="btn">
                            <i class="fas fa-door-open fa-fw fa-lg corazon"></i>
                        </button>
                    </a>
                </form>
            </li>
        </ul>
    </nav>
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav panzotti-nav">
            <li class="nav-item">
                <a href="{{ route('principal')}}" class="nav-link">
                    <i class="fas fa-home azul"></i>
                    <span>Inicio</span>
                </a>
            </li>

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="login.html">Login</a>
                    <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="404.html">404 Page</a>
                    <a class="dropdown-item active" href="blank.html">Blank Page</a>
                </div>
            </li> --}}

            @if (auth()->check() && auth()->user()->is_admin)

            <li class="nav-item {{ (request()->is('user')) ? 'active' : '' }}">
                <a href="{{route('user')}}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span></a>
            </li>

            <li class="nav-item {{ (request()->is('notas')) ? 'active' : '' }}">
                <a href="{{route('notas')}}" class="nav-link">
                    <i class="fas fa-sticky-note"></i>
                    <span>MisNotas</span></a>
            </li>

            <li class="nav-item {{ (request()->is('tipomov')) ? 'active' : '' }}">
                <a href="{{route('tipomov')}}" class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-sync"></i>
                    <span>Tipo Movimiento</span></a>
            </li>

            {{-- <li class="nav-item {{ (request()->is('comentario')) ? 'active' : '' }}">
                <a href="{{route('comentario')}}" class="nav-link">
                    <i class="fas fa-comments"></i>
                    <span>Comentarios</span></a>
            </li> --}}

            <li class="nav-item {{ (request()->is('proveedor')) ? 'active' : '' }}">
                <a href="{{route('proveedor')}}" class="nav-link">
                    <i class="fas fa-truck"></i>
                    <span>Proveedores</span></a>
            </li>

            <li class="nav-item {{ (request()->is('empleado')) ? 'active' : '' }}">
                <a href="{{route('empleado')}}" class="nav-link">
                    <i class="fas fa-address-card"></i>
                    <span>Empleados</span></a>
            </li>

            <li class="nav-item {{ (request()->is('tipomp')) ? 'active' : '' }}">
                <a href="{{route('tipomp')}}" class="nav-link">
                    <i class="fas fa-weight"></i>
                    <span>Tipo Materia Prima</span></a>
            </li>

            <li class="nav-item {{ (request()->is('materiaprima')) ? 'active' : '' }}">
                <a href="{{route('materiaprima')}}" class="nav-link">
                    <i class="fas fa-cube"></i>
                    <span>Materia Prima</span></a>
            </li>

            <li class="nav-item {{ (request()->is('mpplanillaingresoegreso')) ? 'active' : '' }}">
                <a href="{{route('mpplanillaingresoegresos')}}" class="nav-link">
                    <i class="fas fa-paste"></i>
                    <span>Planilla Ingreso/Egreso</span></a>
            </li>

            <li class="nav-item {{ (request()->is('receta')) ? 'active' : '' }}">
                <a href="{{route('receta')}}" class="nav-link">
                    <i class="fas fa-receipt"></i>
                    <span>Recetas</span></a>
            </li>

            <li class="nav-item {{ (request()->is('producto')) ? 'active' : '' }}">
                <a href="{{route('producto')}}" class="nav-link">
                    <i class="fas fa-seedling"></i>
                    <span>Producto</span></a>
            </li>

            <li class="nav-item {{ (request()->is('foto')) ? 'active' : '' }}">
                <a href="{{route('foto')}}" class="nav-link">
                    <i class="fas fa-images"></i>
                    <span>Foto</span></a>
            </li>

            <li class="nav-item {{ (request()->is('productoprecio')) ? 'active' : '' }}">
                <a href="{{route('productoprecio')}}" class="nav-link">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Producto Precio</span></a>
            </li>

            <li class="nav-item {{ (request()->is('productoventa')) ? 'active' : '' }}">
                <a href="{{route('productoventa')}}" class="nav-link">
                    <i class="fas fa-donate"></i>
                    <span>Pedidos</span></a>
            </li>

            <li class="nav-item {{ (request()->is('stock')) ? 'active' : '' }}">
                <a href="{{route('stock')}}" class="nav-link">
                    <i class="fas fa-boxes"></i>
                    <span>Stock</span></a>
            </li>

            @endif

            @if (auth()->check() && auth()->user()->is_empleado)

            <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span></a>
            </li>

            <li class="nav-item">
                <a href="{{route('proveedor')}}" class="nav-link">
                    <i class="fas fa-truck"></i>
                    <span>Proveedores</span></a>
            </li>

            <li class="nav-item">
                <a href="{{route('mpplanillaingresoegresos')}}" class="nav-link">
                    <i class="fas fa-paste"></i>
                    <span>Planilla Ingreso/Egreso</span></a>
            </li>


            <li class="nav-item">
                <a href="{{route('productoventa')}}" class="nav-link">
                    <i class="fas fa-donate"></i>
                    <span>Pedidos</span></a>
            </li>

            <li class="nav-item">
                <a href="{{route('stock')}}" class="nav-link">
                    <i class="fas fa-boxes"></i>
                    <span>Stock</span></a>
            </li>

            @endif

            {{-- <li class="nav-item">
                <a href="{{route('stock')}}" class="nav-link">
            <i class="fas fa-donate"></i>
            <span>Stock</span></a>
            </li> --}}

            {{-- <li class="nav-item">
                <a href="{{route('materiaprimareceta')}}" class="nav-link">
            <i class="fas fa-donate"></i>
            <span>Materia Prima-Receta</span></a>
            </li> --}}

            {{-- <li class="nav-item">
                <a href="{{route('cliente')}}" class="nav-link">
            <i class="fas fa-users"></i>
            <span>Clientes</span></a>
            </li> --}}

            {{-- <li class="nav-item">
                <a href="{{route('venta')}}" class="nav-link">
            <i class="fas fa-donate"></i>
            <span>Ventas</span></a>
            </li> --}}
        </ul>

        <div id="content-wrapper">
            <div class="container-fluid">

                <!-- Page Content -->
                @yield('section_admin')

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>hecho con <i class="fas fa-heart corazon"></i>
                            y mucho <i class="fas fa-coffee"></i> para Pastas Panzotti. (2019)</span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}" async></script>
    <script type="text/javascript" src="{!! asset('js/bootstrap.bundle.min.js') !!}" async></script>

    <!-- Core plugin JavaScript-->
    <script type="text/javascript" src="{!! asset('js/jquery.easing.min.js') !!}" async></script>

    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="{!! asset('js/sb-admin.min.js') !!}" async></script>

</body>

</html>