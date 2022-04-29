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
                <div class="container px-4 px-lg-4">
                    <a class="navbar-brand" href="#page-top">
                        <img  src="{{ asset('dist/assets/img/portfolio/logob.png')}}" width="100px" height="50px" alt="..." />
                    </a>
                    <!--<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    -->
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                      <!--  <ul class="navbar-nav ms-auto my-2 my-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        </ul>-->
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navigation-->
       
        <!-- Masthead-->
        <br><br><br>
        <header class="masthead">
            <!---#######################-->
            <div class="row">
                <div class="col-lg-8">
                    <div class="container px-4 px-lg-5 h-100">
                        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                            <div class="col-lg-8 align-self-end">
                                <br><br>
                                <h1 class="text-white font-weight-bold" ><font color="#66efa5" id="titulo">¿Un METAVERSO en mi organización?</font></h1>
                            </div>
                            <div class="col-lg-8 align-self-baseline">
                                <p class="text-white-75 mb-5" id="titulo"><font id="titulo" size="6">Todo lo que necesita saber sobre los <b>Metaversos Empresariales</b></font> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="container">
                    <h1 class="text-white font-weight-bold" ><font color="#eba506" id="titulo" size="6">INSCRIBETE</font></h1>
                    @if(Session::has('mensaje'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('mensaje')}}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form class="row g-3 needs-validation" action="{{route('datos')}}" method="post">
                     @csrf
                      <div class="col-md-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                          <input type="text" class="form-control" id="lastname" name="nombre" placeholder="Nombre" required>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-building"></i></span>
                          <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" required>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-briefcase-fill"></i></span>
                          <input type="text" class="form-control" id="cargo"  name="cargo" placeholder="Cargo" required>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                          <input type="text" class="form-control" id="correo" name="correo" placeholder="correo@example.com" required>
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-warning" type="submit" style="color:#4b42bf">Enviar</button>
                      </div>
                    </form>
                   </div>
                  </div>
           </div>
            <!---#############################-->
        </header>
        <!--##############################-->
         <!-- Content section 2-->
         <section id="about">
            <div class="container px-2">
                <div class="row gx-3 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src=" {{ asset('dist/assets/img/portfolio/landin_meta_05.jpg')}}" alt="..." /></div>
                    </div>                                                               
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6">Facilitador:</font></h1>
                            <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6">Manuel Castrillón</font></h1>
                            <h6><font color="#a5a38f">MBA (Maestría Administración de Empresas)</font></h6>
                            <h6><font color="#a5a38f">Especialista en Mercadeo y Gamificación</font></h6>
                            <h6><font color="#a5a38f">Ingeniero de Sistemas</font></h6>
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
            <video autoplay controls style="width:50%; height: 50%; margin-right: 6px; margin-bottom: 10px;">
              <source rc="https://www.youtube.com/embed/ABM5UJeILjo" type="video/mp4">
            </video> 
            <br><br>
            <div class="row">
                <div class="col-lg-8">
                    <div class="container px-4 px-lg-5 h-100">
                        <div class="row gx-4 gx-lg-5 h-100 align-items-left; justify-content-left text-left">
                            <div class="col-lg-8 align-self-end">
                                <h1 class="text-white font-weight-bold"align="left" ><font color="#4b42bf" id="titulo">Contenido:</font></h1>
                            </div>
                            <div class="col-lg-8 align-self-baseline justify-content-left">
                                <h5 align="left"><font color="#95948c" size="3"><b>¿Qué son y cuáles</b> son sus aplicabilidades para las empresas, universidades, camaras de comercio?</font> </h5>
                                <h5 align="left"><font color="#95948c" size="3"><b>¿Como diseñar espacios disruptivos</b> de formación en un METAVERSO personalizado para su organización?</font> </h5>
                                <h5 align="left"><font color="#95948c" size="3"><b>¿Como construir ferias</b> internas o con proveedore para sus colaboradores o clientes en un METAVERSO?</font> </h5>
                            </div>
                            <br>
                            <div class="align-self-baseline d-none d-sm-none d-md-block">
                                <h5 align="left"><font color="#95948c" size="3" >Apoya:</font> </h5>
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
                      <div class="col-lg-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                          <input type="text" class="form-control" id="lastname" name="nombre" placeholder="Nombre" required>
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-building"></i></span>
                          <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa"required>
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-briefcase-fill"></i></span>
                          <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo" required>
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                          <input type="text" class="form-control" id="correo" name="correo" placeholder="correo@example.com" required>
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                          <input type="text" class="form-control" id="telefono"  name="telefono" placeholder="Telefono" required>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-2">
                          <br>
                          <button class="btn btn-warning" type="submit" style="color:#4b42bf">Enviar</button>
                        </div>
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
        <div class="col-auto p-5 text-center" style="background-color: #4b42bf">
                
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
    </body>
</html>
