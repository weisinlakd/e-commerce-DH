<header class="d-flex flex-row no-gutters color-1"> <!-- Barra superior de navegación -->
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="home.php"> <!-- Logo -->
              <div class="d-none d-md-block d-xl-block">
                <img class="img-fluid top-logo" src="../img/logonegro.png" alt="">
              </div>
              <div class="d-block d-md-none">
                <img class="img-fluid top-logo " src="../img/logosolo.png" alt="">
              </div>
            </a> <!-- (Fin) Logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
             data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span> <!-- Boton de Menu -->
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">  <!-- Menu -->

              <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                  <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="shopping-cart.php"><span class="d-block d-md-none">Carrito</span><i class="icon ion-md-cart d-none d-md-block d-xl-block"></i></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="product-list.php">Más vendidos</a>
                    <a class="dropdown-item" href="product-list.php">Electrónica</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="product-list.php">Automotores</a>
                  </div>
                </li>
                <li role="separator" class="divider"></li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Ayuda</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li role="separator" class="divider"></li>
              </ul>

              <form method="GET" action="resultados.php?" class="form-inline my-2 my-lg-0 no-gutters w-100">
                <div class="col-10">
                  <input class="form-control w-100" type="search" placeholder="Buscar" aria-label="Buscar" name="buscar" required>
                </div>
                <div class="col-2 d-flex justify-content-center">
                  <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="icon ion-md-search"></i></button>
                </div>
              </form>

              <ul class="navbar-nav">
        <li role="separator" class="divider"></li>
        
        @guest 
          <li class="nav-item">
            <a class="nav-link" href="/login">Ingreso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registro</a>
          </li>
        @else 
          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::user()->foto != 'error')
                      <img class="rounded-circle img-responsive" style="height: 2.5em; width: 2.5em" src="<?=Auth::user()->foto?>" alt="foto perfil">
                    @else 
                      <i class="fa fa-user d-none d-sm-none d-md-none d-lg-block d-xl-block"></i>
                    @endif 
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="perfil.php">Logeado como {{Auth::user()->name}} </a>
                    <a class="dropdown-item" href="perfil.php#settings">Editar perfil</a>
                    <a class="dropdown-item" href="crearPublicacion.php">Crear Publicación</a>
                    <div class="dropdown-divider"></div>
                    
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
            </li>
          @endguest
                </ul>

            </div> <!-- (Fin) Menu -->
          </nav>
        </div>
      </header><!-- (Fin) Barra superior de navegación -->
