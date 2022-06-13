<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Metaverso</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('dist/assets/favicon.jpg')}}" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('dist/css/styles.css')}}" rel="stylesheet" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet"> 
    </head>
    <body id="page-top">
        <div >
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: white">
                <div class="container px-2 px-lg-2">
                    <a class="navbar-brand" href="https://www.evolucion.co/">
                       
                          <img  class="figure-img img-fluid rounded" src="{{ asset('dist/assets/img/portfolio/logob.png')}}" alt="..." />
      
                      </a>
                    <!--<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    -->
                </div>
            </nav>
        </div>
        <!-- Navigation-->
       
        <!-- Masthead-->
        <header class="masthead" style="padding-top: 2em;">
            <!---#######################text-start-->
            <div class="container-fluid" style="margin-top:8%;">
            <div class="row" style="padding-top: 2em;">
                <div class="col-lg-7">
                    <div class="container-fluid">
                        <div class="align-items-center">
                            <div class="container">
                                <br><br>
                                <h1 class="font-weight-bold text-start"  ><font color="#66efa5" id="titulo">¿Un METAVERSO en mi organización?</font></h1>
                            </div>
                            <br>
                            <div class="container align-self-baseline  text-start">
                              <br>
                                <p class="text-white-75 mb-5" id="titulo" style="font-family: Open Sans; font-size: 250%;">Todo lo que necesita saber sobre los <b>Metaversos Empresariales</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                <div class="container-fluid">
                <div class="container align-items-center">
                    <h1 class="text-white font-weight-bold"><font color="#eba506" id="titulo" size="6">INSCRIBETE</font></h1>
                    @if(Session::has('regdup'))
                        <div class="alert alert-dismissible fade show" role="alert" style="background-color:#FFFC33;">
                        <strong>&nbsp;{{Session::get('regdup')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('regex'))
                        <div class="alert alert-dismissible fade show" role="alert"  style="background-color:#66efa5;">
                        <strong>&nbsp;{{Session::get('regex')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                  <form class="row g-2 needs-validation align-items-center" action="{{route('datos')}}" method="post">
                     @csrf
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                          <input type="text" class="form-control" id="lastname" name="nombre" placeholder="Nombre" autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-caret-down-square-fill"></i></span>
                            <select id="genero" name="genero" class="form-control">
                              <option selected>Genero ...</option>
                              <option value="male">Masculino</option>
                              <option value="female">Femenino</option>
                              <option value="nb">No binario</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-building"></i></span>
                          <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-briefcase-fill"></i></span>
                          <input type="text" class="form-control" id="cargo"  name="cargo" placeholder="Cargo"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                          <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@example.com"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-warning float-end" type="submit" style="color:#4b42bf">Enviar</button>
                      </div>
                    </form>
                   </div>
                  </div>
               </div>
               
           </div>
            <!---#############################-->
            <br>
          </div>
        </header>
        <!--##############################-->
         <!-- Content section 2-->
         <section id="about">
            <div class="container px-2">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid rounded-circle" src=" {{ asset('dist/assets/img/portfolio/landin_meta_05.jpg')}}" alt="..." />
                    </div>                                                               
                    <div class="col-lg-7">
                           <br><br>
                           <div class="container-flex" style="padding-left:1em; padding-right:1em;">
                            <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6">Facilitador:</font></h1>
                            <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6">Manuel Castrillón</font></h1>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>MBA (Maestría Administración de Empresas)</b></h6>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>Especialista en Mercadeo y Gamificación</b></h6>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>Ingeniero de Sistemas</b></h6>
                            <br>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>Con más de 12 años de experiencia en el mundo del diseño de experiencias de aprendizaje y la gamificación para el mundo corporativo, Manuel y su equipo han preparado un evento completamente disruptivo e inversivo para que lo disfrutes dentro de un METAVERSO.</b>
                            </h6> 
                             <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;">
                             <b> El evento servirá para abrirnos la mente y conectar todo lo que necesitas saber para aplicar la tecnología en sus empresas, en espacios formativos diferentes, ferias de negocios virtuales o hibridas y/o espacios de trabajo en equipo y relacionamiento para crear grupos primarios diferentes.</b>
                             </h6> <br>
                            <h5>¡Te esperamos!</h5>
                           </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <!--##############################-->
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="col-auto p-2 text-center" style="background-color: #eba506">
                <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6"><i class="bi bi-calendar-check"></i> Mayo 18 / 8 a.m. a 10 a.m.</font></h1>
                <h5><font color="#4b42bf" id="titulo">ENTRADA GRATUITA - DENTRO DE UN METAVERSO</font></h5>
            </div>
        </section>
        <!-- Portfolio-->
        <div class="container col-auto p-2 text-center">
          <!---pantallas grandes-->
          <div class="container d-none d-sm-none d-md-block" style="padding-left: 5em; padding-right: 5em;">
              <div class="video-responsive">
                <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/6ZCIEgBdGIA" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <br><br><br>
         </div>
         <!---pantallas pequeñas-->
         <div class="container d-sm-block d-block d-sm-block d-md-none">
              <div class="video-responsive">
                <iframe width="400" height="200"  style="padding-top: 3em; padding-bottom: 3em;"
                    src="https://www.youtube.com/embed/6ZCIEgBdGIA" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
         </div>
         <!--end pantallas pequeñas-->
            <div class="row">
                <div class="col-lg-8">
                    <div class="container px-4 px-lg-5 h-100">
                        <div class="text-start">
                          <br>
                            <div class="col-lg-8 align-self-end">
                                <h1 class="font-weight-bold"><font color="#4b42bf" id="titulo">Contenido:</font></h1>
                               <br>
                              </div>
                            <div class="justify-content-left">
                                <h5 style="font-family: Open Sans; font-size: 113%; text-align:justify;"><b>¿Qué son y cuáles</b> son sus aplicabilidades para las empresas, universidades, camaras de comercio </h5>
                                <h5 style="font-family: Open Sans; font-size: 113%; text-align:justify;"><b>¿Como diseñar espacios disruptivos</b> de formación en un METAVERSO personalizado para su organización?</h5>
                                <h5 style="font-family: Open Sans; font-size: 113%; text-align:justify;"><b>¿Como construir ferias</b> internas o con proveedore para sus colaboradores o clientes en un METAVERSO?</h5>
                            </div>
                            <br>
                            <div class="align-self-baseline d-none d-sm-none d-md-block">
                                <h5 style="font-family: Open Sans; font-size: 113%; text-align:justify;"><b>Apoya:</b></h5>
                                <br>
                                <img src="{{ asset('dist/assets/img/portfolio/events.png')}}" width="250px" height="50px" align="left">
                            </div> 
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="container">
                     
                  <br>
                    <h1 class="text-white font-weight-bold" align="left"><font color="#eba506" id="titulo" size="6">INSCRIBETE</font></h1>
                    <form  action="{{route('datos')}}" method="post" class="row g-3 needs-validation">
                    @csrf
                      <div class="col-lg-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                          <input type="text" class="form-control" id="lastname" name="nombre" placeholder="Nombre"  autocomplete="off" required>
                        </div>
                      </div>
                       <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-caret-down-square-fill"></i></span>
                            <select id="genero" name="genero" class="form-control">
                              <option selected>Genero ...</option>
                              <option value="male">Masculino</option>
                              <option value="female">Femenino</option>
                              <option value="nb">No binario</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-building"></i></span>
                          <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-briefcase-fill"></i></span>
                          <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                          <input type="text" class="form-control" id="correo" name="correo" placeholder="correo@example.com"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                          <input type="text" class="form-control" id="telefono"  name="telefono" placeholder="Telefono"  autocomplete="off" required>
                        </div>
                      </div>
                      <br>
                        <div class="col-lg-12">
                          <button class="btn btn-warning float-end" type="submit" style="color:#4b42bf">Enviar</button>
                        </div>
                    </form>
                   
                  </div>
                  </div>

           </div>
        </div>
        <!-----imagen para celulares-->
        <div class="container">
        <div class="align-self-baseline d-sm-block d-block d-sm-block d-md-none">
          <div class="col-lg-8 align-self-end">
          <h1 class="text-left text-white font-weight-bold" ><font color="#4b42bf" id="titulo">&nbsp;&nbsp;&nbsp;Apoya</font></h1>
          </div>
          <br>
          <img class="rounded mx-auto d-block" src="{{ asset('dist/assets/img/portfolio/events.png')}}" width="250px" height="50px">
        </div>
        </div>
        <!----end imagenes para celulares-->
        <br><br>
        <div class="col-auto p-5 text-rigth" style="background-color: #4b42bf">
               <h4 style="color:white;">Conoce mas acerca de <a href="https://www.evolucion.co/" style="text-decoration:none; color:#eba506;">Evolución</a></h4> 
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('dist/js/scripts.js')}}"></script>
        
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <style>
          /* Start: Video Responsive */
            .video-responsive {
                overflow:hidden;
                padding-bottom:450px; /* Adecua este valor para controlar la altura del video */
                position:relative;
                height:0;
            }

            .video-responsive iframe{
                left:0;
                top:0;
                height:100%;
                width:100%;
                position:absolute;
            }
            /* End: Video Responsive */
        </style>
      </body>
</html>
