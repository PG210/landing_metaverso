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
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: white">
          <div class="container px-2 px-lg-2">
              <a class="navbar-brand" href="https://www.evolucion.co/">
                  
                    <img  class="figure-img img-fluid rounded" src="{{ asset('dist/assets/img/portfolio/logob.png')}}" alt="..." />

                </a>
              <!--<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              -->
          </div>
      </nav>
        <!-- Navigation-->
        <!-- Masthead-->
        <br><br><br>
        <img src="{{asset('dist/assets/img/meta.jpeg')}}" class="img-fluid" alt="..." width="100%" >
          <!-- Services-->
           <div class=" masthead">
            <div class="row"  style="padding-top:3rem; padding-bottom:20px; padding-left:4rem;">
              <div class="col-md-7">
                <!---contenedor lado izquierdo-->
                <div class="container">
                  <div class="col-auto p-2 text-justify">
                    <h2  style="color:#eba506;"><fonts id="titulo">NUEVAS CULTURAS DE TRABAJO</fonts></h2><br>
                    <h1 class="font-weight-bold"  style="color:#eba506;"><fonts  id="titulo" size="6"><i class="bi bi-calendar-check"></i>&nbsp;&nbsp;Jueves 30 De Junio</fonts></h1><br>
                    <h1 class="font-weight-bold"  style="color:#eba506;"><fonts  id="titulo" size="6"><i class="bi bi-alarm"></i>&nbsp;&nbsp;6 p.m. a 7:30 p.m.</fonts></h1>
                  </div>
               </div>
                <!--end contenedor-->
              </div>
              <div class="col-md-5">
                   <!--formulario-->
                   <div class="container">
                   <h1 class="font-weight-bold"  style="color:#eba506;"><fonts id="titulo" size="6">INSCRIBETE</fonts></h1><!-- color="#4b42bf"-->
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
                   <form class="row g-2 needs-validation" action="{{route('datos')}}" method="post">
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
                   <!--end formulario-->
              </div>
            </div>
           </div>
        <!-- expositores 1-->
        <section class="page-section" id="services">
            <div class="col-auto p-2 text-center" style="background-color: #eba506">
                <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6"><i class="bi bi-people-fill"></i>&nbsp;&nbsp;Invitados Especiales</font></h1>
            </div>
        </section>
        <!--cards-->
        <div style="margin:25px 40px 75px 40px;">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <div class="col-lg-5" style="padding:5px 5px 5px 5px;">
              <img class="img-fluid rounded-circle card-img-top" src=" {{ asset('dist/assets/img/portfolio/Alexandra.jpeg')}}" alt="..." />
              </div>
              <div class="card-body">
                <h3 class="card-title font-weight-bold" style="color:#4b42bf; size:6px;" id="titulo">Alexandra Valencia</h3>
                <p class="card-text">
                  <!--descripcion-->
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                    Psicóloga.
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                    Magister en Gerencia del Talento Humano.
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Especialista en Gerencia de la Información.
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Especialista en Formación para Organizaciones del sector público.
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Coach Ejecutivo.
                  </b></h6>
                  <!--end descripcion-->
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><h6>Gobernación De Antioquia</h6></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="col-lg-5" style="padding:5px 5px 5px 5px;">
               <img class="img-fluid rounded-circle card-img-top" src="{{ asset('dist/assets/img/portfolio/Sara.jpeg')}}" alt="..." />
              </div>
              <div class="card-body">
              <h3 class="card-title font-weight-bold" style="color:#4b42bf; size:6px;" id="titulo">Sara Medina</h3>
                <p class="card-text">
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                    Psicóloga.
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Especialista en gestión humana.
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Experiencia en todos los subprocesos del área de Gestión Humana.
                  </b></h6>
                </p>
              </div>
               <div class="card-footer">
                <small class="text-muted"><h6>Kometsales</h6></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="col-lg-5" style="padding:5px 5px 5px 5px;">
                  <img class="img-fluid rounded-circle" src=" {{ asset('dist/assets/img/portfolio/LuzMaria.jpeg')}}" alt="..." />
              </div> 
              <div class="card-body">
                <h3 class="card-title font-weight-bold" style="color:#4b42bf; size:6px;" id="titulo">Luz María Montoya</h3>
                <p class="card-text">
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Profesional en áreas sociales y administrativas
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                    Desempeña cargos de Gerencia Administrativa y del Talento Humano hace más de 20 años</b></h6>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><h6>Centro Aceros</h6></small>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!--end cards-->
        <!--end expositorios-->
         <!-- Content section 2-->
         <section id="about">
            <div class="container px-2">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-5" >
                        <img class="img-fluid rounded-circle" src=" {{ asset('dist/assets/img/portfolio/landin_meta_05.jpg')}}" alt="..." />
                    </div>                                                               
                    <div class="col-lg-7">
                           <br><br>
                           <div class="container-flex" style="padding-left:1em; padding-right:1em;">
                            <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6">MODERADOR DEL FORO EN EL METAVERSO</font></h1>
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
        <!--
        <div class="container col-auto p-2 text-center">
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
         </div>-->
         <!--end pantallas pequeñas-->
         <!--   <div class="row">-->
               <!-- <div class="col-lg-8">
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
                </div>-->
                <!--
                <div class="col-lg-6">
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
        </div>-->
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
