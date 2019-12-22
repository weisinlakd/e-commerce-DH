<!doctype html>
<html lang="en">
  <?php 
    $titulo = 'Preguntas Frecuentes';
    require_once('head.php');
  ?>
  <body>

    <div class="container-fluid p-0"><!-- Contenedor -->
      <header class="d-flex flex-row no-gutters color-1"> <!-- Barra superior de navegación -->
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="home.html"> <!-- Logo -->
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
                  <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="shopping-cart.html"><span class="d-block d-md-none">Carrito</span><i class="icon ion-md-cart d-none d-md-block d-xl-block"></i></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="product-list.html">Más vendidos</a>
                    <a class="dropdown-item" href="#">Electrónica</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Automotores</a>
                  </div>
                </li>
                <li role="separator" class="divider"></li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Ayuda</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contacto</a>
                </li>
                <li role="separator" class="divider"></li>
              </ul>

              <form class="form-inline my-2 my-lg-0 no-gutters w-100">
                <div class="col-10">
                  <input class="form-control w-100" type="search" placeholder="Buscar" aria-label="Buscar">
                </div>
                <div class="col-2 d-flex justify-content-center">
                  <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><a href="resultados.html" style="text-decoration: none; color:black "><i class="icon ion-md-search"></i></a></button>
                </div>
              </form>

              <ul class="navbar-nav">
				<li role="separator" class="divider"></li>
				<li class="nav-item">
					<a class="nav-link" href="perfil.html"><span class="d-block d-md-none">Usuario</span><i class="fa fa-user d-none d-md-block d-xl-block"></i></a>
				</li>
                <li class="nav-item">
                  <a class="nav-link" href="sign-in.html">Ingreso</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html">Registro</a>
                </li>
              </ul>

            </div> <!-- (Fin) Menu -->
          </nav>
        </div>
      </header><!-- (Fin) Barra superior de navegación -->

      <!-- <div class="row color-4 p-3">

        <div class="col-12 mb-3 text-center">
          <div class="p-4 bg-white">
            <h2>Preguntas Frecuentes</h2>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 1?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 1</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 2?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 2</p>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 3?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 3</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 4?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 4</p>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 5?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 5</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 6?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 6</p>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="col-12">
            <h4>¿Pregunta 7?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 7</p>
          </div>

          <div class="col-12">
            <h4>¿Pregunta 8?</h4>
          </div>
          <div class="col-12">
            <p>Respuesta 8</p>
          </div>
        </div>
      </div> -->

      <div class="row color-4 p-3 text-center m-0"><!-- Informacion General -->
        <div class="col-12">
          <h2>Manaos Libre</h2>
        </div>
        <div class="col-12">
          <p>Proyecto integrador del curso "Full Stack Dev" de Digital House, basado en un catalogo de productos
          o también llamado e-commerce. </p>
        </div>
        <div class="col-12 col-md-6">
          <div class="col-12">
            <h3>Primer Sprint</h3>
          </div>
          <div class="col-12 text-left">
            <ul>
              <li>Home - Con información general del proyecto</li>
              <li>F.A.Q. - Preguntas frecuentes</li>
              <li>Formulario de Registro - Visual, pero no funcional</li>
              <li>Formulario de Login - Visual, pero no funcional</li>
              <li>Formulario de Contacto - Visual, pero no funcional</li>
              <li>Perfil de Usuario</li>
              <li>Vista de listado de productos</li>
              <li>Vista del detalle de un producto</li>
              <li>Vista del carrito de compra</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="col-12">
            <h3>Integrantes</h3>
          </div>
          <div class="col-12 text-left">
            <ul>
              <li>Luciano Laurent - Scrum Master</li>
              <li>Fausto Castillo - Product Owner</li>
              <li>Agustin Magliola - Dev</li>
              <li>Luciano Ludueña - Dev</li>
            </ul>
          </div>
        </div>
      </div><!-- (Fin)  Informacion General -->

    </div><!-- (Fin)Contenedor -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
    <footer class="footer-section spad">
      <div class="container">
          <div class="newslatter-form">
            <div class="row">
              <div class="col-lg-12">
                <form action="#">
                  <input type="text" placeholder="ingresá tu e-mail...">
                  <button type="submit">Subscribe a nuestro newsletter</button>
                </form>
              </div>
            </div>
          </div>
          <div class="footer-widget">
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                  <h4>Sobre Nosotros</h4>
                  <ul>
                    <li>Sobre Nosotros</li>
                    <li>Comunidad</li>
                  </ul>
                </div>
              </div>
            <div class="col-lg-3 col-sm-6">
              <div class="single-footer-widget">
                <h4>Servicio al Cliente</h4>
                <ul>
                  <li>Política de Privacidad</li>
                  <li>Envíos & Delivery</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="single-footer-widget">
                <h4>Nuestros Servicios</h4>
                <ul>
                  <li>Envío Gratis</li>
                  <li>Devoluciones Gratuitas</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="single-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="faq.html" style="text-decoration: none; color: #fff;">FAQ</a></li>
                  <li>Métodos de Envío</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="social-links-warp">
        <div class="container">
          <div class="social-links">
            <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
            <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
            <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
            <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
            <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
            <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
          </div>
        </div>
        <!-- <div class="container text-center pt-5">
          <p>
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="bba5e7fdb0ecd42f6a179fdb-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
        </div> -->
      </div>
  </footer>>
  
  
    <script src="../js/jquery-3.3.1.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/jquery.magnific-popup.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/jquery.slicknav.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/owl.carousel.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/jquery.nice-select.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/mixitup.min.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script src="../js/main.js" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
  
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="bba5e7fdb0ecd42f6a179fdb-text/javascript"></script>
    <script type="bba5e7fdb0ecd42f6a179fdb-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bba5e7fdb0ecd42f6a179fdb-|49" defer=""></script></body>
  </html>