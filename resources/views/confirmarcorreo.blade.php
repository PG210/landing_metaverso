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
      <br><br><br>
      <div class=" masthead">
            <div class="row"  style="padding-top:3rem; padding-bottom:5px; padding-left:4rem;">
              <div class="col-md-12">
                <!---contenedor lado izquierdo-->
                <div class="container">
                  <div class="col-auto p-2">
                    <h1 class="text-center" style="color:white;"><fonts id="titulo">Confirma tu correo electrónico</fonts></h1><br>
                    <h3 class="font-weight-bold text-justify"  style="color:white;"><fonts  id="titulo" size="6">Acabamos de enviar un correo electrónico a tu cuenta <span style="color:#eba506;">@if(isset($correo)){{$correo}}@endif</span> debes de confirmar para finalizar el proceso de registro.</fonts></h3><br>
                    <h6 class="font-weight-bold text-justify"  style="color:white;"><fonts  id="titulo" size="6">Si no recibió el correo de confirmación, revise su spam ó verifique que su cuenta sea correcta</fonts></h6>
                  </div>
                  <div class="container">
                        <a href="/" class="btn float-end" type="button" style="background-color:#eba506; color:white;">Salir</a>
                        <input  class="btn" type="button" value="Volver a enviar" onclick="location.reload()" style="background-color:#4b42bf; color:white;">
                  </div>
               </div>
                <!--end contenedor-->
              </div>
            </div>
           </div>
         <!--end form-->
         

        <!----end imagenes para celulares-->
        <footer class="col-auto p-5" style="background-color:white;">
          <div class="row">
            <div class="col-md-5 text-start  d-none d-sm-none d-md-block"><!--pantallas grandes-->
                 <h3 style="color:#4b42bf;" id="titulo">Conoce más acerca de </h3> 
                 <h3 style="color:#4b42bf;" id="titulo"><a href="https://www.evolucion.co/" style="text-decoration:none; color:#eba506;">Evolución</a></h3> 
            </div>
            <div class="col-md-5 text-start d-block d-sm-block d-md-none"><!--pantallas peques-->
              <h3 style="color:#4b42bf;" id="titulo">Conoce más acerca de <a href="https://www.evolucion.co/" style="text-decoration:none; color:#eba506;">Evolución</a> </h3> 
            </div>
            <div class="col-md-2  d-none d-sm-none d-md-block">
              <p></p>
             <img src="{{asset('dist/assets/img/portfolio/formactiva1.jpg')}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-5 text-end d-none d-sm-none d-md-block"><!--pantallas grandes-->
              <div class="container" style="margin-left:1rem;"> <h3 class=" font-weight-bold" id="titulo"style="color:#4b42bf;">Apoya</h3> </div>
               <img src="{{asset('dist/assets/img/portfolio/events.png')}}" class="img-fluid" alt="..." width="50%">
              </div>
            <div class="col-md-5 text-start d-block d-sm-block d-md-none"><!--pantallas peques-->
              <br>
              <h3 class=" font-weight-bold" id="titulo"style="color:#4b42bf;">Apoya</h3><br>
               <img src="{{asset('dist/assets/img/portfolio/events.png')}}" class="img-fluid" alt="...">
               <img src="{{asset('dist/assets/img/portfolio/formactiva1.jpg')}}" class="img-fluid" alt="..." style="padding-top:1.5em;">
            </div>
          </div>
        </footer>
       
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
