<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Mobile first -->
        <meta name="author" content="Borxa Mendez Candeias & Andrea Sanchez Blanco">

        <title>FAQ.life</title> <!-- Titulo de la pestaña -->
        <link rel="shortcut icon" href="img/logo.ico"/> <!-- Icono de la pestaña -->

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <!-- Barra de navegacion -->
        <nav class="head navigation-text col-xs-12 col-sm-12 col-md-12">
          <!-- div con el titulo y el icono en modo movil -->
          <div class="col-md-2 navbar-header page-scroll">
              <button type="button" class="navbar-toggle2 button-menu" data-toggle="collapse" data-target="#navbar-collapse1">
                  <span class="text-menu-toggle osSansFont-menu">Menu</span>
              </button>
              <a class="navbar-logo pacificoFont-menu" href="index.html">FAQ.life</a>
          </div>
          <!-- div con la lista de navegacion -->
          <div class="col-md-10 collapse navbar-collapse navbar-right" id="navbar-collapse1">
              <ul class="nav navbar-nav navbar-right osSansFont">
                  <li> <!-- Search box --> 
                    <form class="navbar-form" role="search">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Buscar"/>
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                  </li>
                  <li><a href="categorias.html">Categorias</a></li>
                  <li><a href="" data-toggle="modal" data-target="#loginModal">Login</a></li>
              </ul>
          </div>
        </nav>
        
        <!-- Contenido Principal -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
            <!--  QUESTION  -->
            <div class="row">
                <div class="col-sm-1 col-md-1"></div>
                <div class="col-xs-12 col-sm-10 col-md-10"> <!-- nested grid - question -->
                    <div class="row">                          
                        <div class="col-xs-12 col-sm-3 col-md-2">
                            <!-- Profile picture -->
                            <div id="container-imagen">
                                <img src="img/superman.jpg" alt="views">
                            </div>
                            <!-- Contador de visitas -->
                            <div class="col-xs-3 col-sm-6 col-md-6">
                                <div class="centrado">
                                    <img src="img/visitas.png" class="centrado iconos">
                                </div>
                                <div class="centrado opSansReFont">126</div>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-6">
                                <div class="centrado opSansReFont">
                                    <img src="img/respuestas.png" class="centrado iconos">
                                </div>
                                <div class="centrado opSansReFont">57</div>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-6">
                                <div class="centrado opSansReFont">
                                    <img src="img/positivo.png" class="centrado iconos">
                                </div>
                                <div class="centrado opSansReFont">16</div>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-6">
                                <div class="centrado">
                                    <img src="img/negativo.png" class="centrado iconos">
                                </div>
                                <div class="centrado opSansReFont">5</div>
                            </div>
                        </div>
                         <!-- Question -->
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <h1 class="opSansBFont">¿Si satanas castiga a los malos, eso no lo hace ser bueno? </h1>
                            <p class="opSansReFont">Pues los malos se van al infierno y satanas les da su merecido, eso no lo hace bueno?<p>
                            <p class="opSansItFont">Preguntado por <a href="">Manolo</a> el 22/10/2015 a las 10:20 horas en la categoría de <a href="">Religión</a>.</p>
                        </div>
                    </div>
                    <hr class="small separatorQuestion">
                </div>
            </div>
            
           <!-- RESPONDER -->
            <form>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-2 col-md-2"></div>
                    <div class="col-xs-12 col-sm-8 col-md-8" id="caja-pregunta">
                        <textarea class="form-control respuestaCuerpo opSansLiFont" rows="4" placeholder="Respuesta"></textarea>
                        <button type="submit" class="btn-login button-preguntar">Responder!</button>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2"></div>
                </div>
            </form>
            
            <!-- ANSWERS -->
            <div class="row">
                <div class="col-sm-2 col-md-2"></div>
                <div class="col-xs-12 col-sm-8 col-md-8"> <!-- nested grid - answers -->
                    <!-- Answer 1 -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-2">
                            <!-- Profile picture -->
                            <div class="col-xs-12 col-sm-12 col-md-12" id="container-imagen">
                                <img src="img/pluto_posando.jpg" alt="views">
                            </div>
                            <!-- Votos -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="centrado opSansReFont">
                                        <img src="img/positivo.png" class="centrado iconos">
                                    </div>
                                    <div class="centrado opSansReFont">16</div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="centrado">
                                        <img src="img/negativo.png" class="centrado iconos">
                                    </div>
                                    <div class="centrado opSansReFont">5</div>
                                </div>
                            </div>
                        </div>
                         <!-- Content -->
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <h3 class="opSansBFont">Marco Perez </h3>
                            <p class="opSansReFont">yo siempre dije q satanas era un buen loco incomprendido por esta sociedad posmoderna<p>
                            <p class="opSansItFont">Respondido por <a href="">Marco</a> el 22/10/2015 a las 09:20 horas.</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <hr class="small" id="separador">
                        </div>
                    </div>
                    
                    <!-- Answer 2 -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-2">
                            <!-- Profile picture -->
                            <div class="col-xs-12 col-sm-12 col-md-12" id="container-imagen">
                                <img src="img/pluto_lengua.jpg" alt="views">
                            </div>
                            <!-- Votos -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="centrado opSansReFont">
                                        <img src="img/positivo.png" class="centrado iconos">
                                    </div>
                                    <div class="centrado opSansReFont">16</div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="centrado">
                                        <img src="img/negativo.png" class="centrado iconos">
                                    </div>
                                    <div class="centrado opSansReFont">5</div>
                                </div>
                            </div>
                        </div>
                         <!-- Content -->
                        <div class="col-xs-12 col-sm-9 col-md-10">
                            <h3 class="opSansBFont">Lucas Rodriguez </h3>
                            <p class="opSansReFont">Tus premisas son acertadas pero como Satanas no existe eso no es valido<p>
                            <p class="opSansItFont">Respondido por <a href="">Lucas</a> el 30/10/2015 a las 10:20 horas.</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <hr class="small" id="separador">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Login Modal Page -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button href="categorias.html" type="submit" class="btn btn-register">Registrarse</button>
                        <h4 class="modal-title osSansFont" id="myModalLabel">Log in</h4>
                    </div>
                    
                    <!-- Contenido de la página login modal -->
                    <div class="modal-body">
                        <form name="sentMessage" id="loginForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Email address" id="email" required data-validation-required-message="Please enter your email.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter your password.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn-login">Iniciar sesion</button>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    
    <!-- Footer -->
    <footer class="col-xs-12 col-sm-12 col-md-12">
        <hr class="small">
        <p class="footer-autores">Copyright &copy; FAQ.life 2015 - Borxa Mendez Candeias &amp; Andrea Sanchez Blanco</p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
</html>