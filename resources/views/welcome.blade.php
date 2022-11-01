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
        <img style="background-color:#021c4f;" src="{{asset('dist/assets/img/banner_mod.jpg')}}" class="img-fluid d-none d-sm-none d-md-block" alt="..." width="100%" >
         <img style="background-color:#021c4f; padding-top:3em; padding-bottom:3em;" src="{{asset('dist/assets/img/banner_mod.jpg')}}" class="img-fluid d-block d-sm-block d-md-none" alt="..." width="100%">
       
        <!-- Services-->
           <div class=" masthead">
            <div class="row"  style="padding-top:3rem; padding-bottom:20px; padding-left:4rem;">
              <div class="col-md-7">
                <!---contenedor lado izquierdo-->
                <div class="container" id="formulario">
                  <div class="col-auto p-2 text-justify">
                    <h1  style="color:white;"><fonts id="titulo">ReconoSER</fonts></h1><br>
                    <p class="font-weight-bold"  style="color:white; text-align:justify; line-height:1.3; font-size:36px;" id="titulo">La historia de nuestro programa de reconocimiento y sus impactos</p><br>
                    <!--<h3 class="font-weight-bold"  style="color:#eba506;"><fonts  id="titulo" size="6">Entrada GRATUITA</fonts></h3><br>
                    <h2 class="font-weight-bold"  style="color:white;"><fonts  id="titulo" size="6"><i class="bi bi-calendar-check"></i>&nbsp;&nbsp;MIÉRCOLES 3 DE AGOSTO</fonts></h2><br>
                    <h2 class="font-weight-bold"  style="color:white;"><fonts  id="titulo" size="6"><i class="bi bi-alarm"></i>&nbsp;&nbsp;8:00 AM</fonts></h2>
                    -->
                    <p class="font-weight-bold"  style="color:white; line-height:1.3; font-size:30px; text-align:justify;" id="titulo">
                      En este espacio compartiremos diferentes estrategias que hemos diseñado e implementando en nuestra organización para impactar la vida de nuestros colaboradores positivamente a través del reconocimiento.
                    </p><br>
                  </div>
               </div>
                <!--end contenedor-->
              </div>
              <div class="col-md-5">
                   <!--formulario-->
                   <div class="container">
                   <h1 class="font-weight-bold"  style="color:#239FB8;"><fonts id="titulo" size="6">INSCRIBETE</fonts></h1><!-- color="#4b42bf"-->
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
                    @if(Session::has('correodif'))
                        <div class="alert alert-dismissible fade show" role="alert" style="background-color:#FFFC33;">
                        <strong>&nbsp;{{Session::get('correodif')}}</strong> 
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
                          <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@example.com"  required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                          <input type="email" class="form-control" id="correocon" name="correocon" placeholder="Confirma tu correo"  autocomplete="on" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-12">
                         <div class="container" style="background-color:#eba506; padding-top:10px; padding-bottom:10px;">
                          <h6 style="color:white; text-align: justify;"> Nota: <br>Una vez registrado te debe llegar un email con los paso a seguir.<p> Si tienes alguna duda escribenos a 
                          <a href="mailto:soporte@evolucion.co?Subject=Ayuda%20Evento%20MetaTalks" style="color:#4b42bf" >soporte@evolucion.co</a>
                          <p></h6>
                          </div>
                          <br>
                        <button class="btn float-end" type="submit" style="background-color:#eba506; color:white;" onClick="comprobarClave()">Enviar</button>
                      </div>
                      <div class="col-12">
                        <!--collapsed-->
                        <!--end colpase-->
                      </div>
                    </form>
                    </div>
                   <!--end formulario-->
                   <!--mensaje-->
                   <!--end mensaje-->
              </div>
            </div>
           </div>
        <!-- expositores 1-->
    <!--    <section class="page-section" id="services">
            <div class="col-auto p-2 text-center" style="background-color: #eba506">
                <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6">&nbsp;&nbsp;CONFERENCISTA</font></h1>
            </div>
        </section>-->
        <!--cards-->
        <!--
        <div style="margin:25px 40px 75px 40px;">
        <div class="row row-cols-1 row-cols-md-2 g-4">
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
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Me apasiona el crecimiento y el bienestar de las personas dentro de las organizaciones, alineando los objetivos organizacionales a los personales, logrando potencializar las competencias de las personas y asegurando la consecución del mejor talento para la compañía.
                  </b></h6>
                </p>
              </div>
              <div class="card-footer " style="background-color:#eba506;">
                <h5 style="color:#4b42bf;" id="titulo">Kometsales</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="col-lg-5" style="padding:5px 5px 5px 5px;">
                  <img class="img-fluid rounded-circle" src=" {{ asset('dist/assets/img/portfolio/Carolina.jpeg')}}" alt="..." />
              </div> 
              <div class="card-body">
                <h3 class="card-title font-weight-bold" style="color:#4b42bf; size:6px;" id="titulo">Carolina Quintero Lalinde</h3>
                <p class="card-text">
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Gerente de Gestión del Talento
                  </b></h6>
                  <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                  Líder en procesos de transformación humana con amplia experiencia en la planificación del talento y evolución cultural, entusiasta y apasionada por la transformación de personas
                   y equipos en la organización, convencida de la promoción del conocimiento y el proceso de aprendizaje</b></h6>
                </p>
              </div>
              <div class="card-footer " style="background-color:#eba506;">
                <h5 style="color:#4b42bf;" id="titulo">Choucair Testing</h5>
              </div>
            </div>
          </div>
        </div>
      </div>-->
        <!--end cards-->
        <!--end expositorios-->
            <div class="col-auto p-2 text-center" style="background-color: #eba506">
                <!--<h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;CONFERENCISTA</font></h1>-->
                <h2 class="font-weight-bold"  style="color:white;"><fonts  id="titulo" size="6"><i class="bi bi-calendar-check"></i>&nbsp;&nbsp;MIÉRCOLES 5 DE OCTUBRE 8:00 AM</fonts></h2>
            </div>
         <!-- Content section 2-->
         <section id="about">
            <div class="container px-2">
              <div class="container">
                <br>
                 <div class="row">
                  <div class="col-12 text-center">
                    <h3 class="card-title font-weight-bold" style="color:#4b42bf; size:6px;" id="titulo">CONFERENCISTAS</h3>
                  </div>
                 </div>
              </div>
               <!--cards-->
                <div style="margin:25px 40px 75px 40px;">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                    <div class="card h-100">
                      <div class="col-lg-6" style="margin: 0 auto">
                      <img class="img-fluid rounded-circle card-img-top" src=" {{ asset('dist/assets/img/portfolio/patricia.png')}}" alt="..." />
                      </div>
                      <div class="card-body">
                        <h3 class="card-title font-weight-bold" style="color:#4b42bf; size:6px;" id="titulo">Patricia Montealegre Castillo</h3>
                        <p class="card-text">
                          <!--descripcion-->
                          <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                            Una mujer dinámica, amable y con muchas ganas
                            de aprender. Con un esposo y dos hijos hermosos,
                            con los que disfrutamos el campo, las películas, y
                            los animales.
                          </b></h6>
                          <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                            Psicóloga, con experiencia en <span style="color:black;">Talento Humano</span> en
                            diferentes organizaciones, actualmente Gerente de
                            Talento Humano del Banco W.
                          </b></h6>
                          <!--end descripcion-->
                        </p>
                      </div>
                     <!-- <div class="card-footer">
                        <small class="text-muted"><h6>Gobernación De Antioquia</h6></small>
                      </div>-->
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <div class="col-lg-6" style="margin: 0 auto">
                      <img class="img-fluid rounded-circle card-img-top" src="{{ asset('dist/assets/img/portfolio/claudia.png')}}" alt="..." />
                      </div>
                      <div class="card-body">
                      <h3 class="card-title font-weight-bold" style="color:#4b42bf; size:6px;" id="titulo">Claudia Patricia Pérez Melo</h3>
                        <p class="card-text">
                          <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                          La menor de una familia de 6 hijos, amante de
                          su familia, los animales y la naturaleza.
                          </b></h6>
                          <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>
                            Psicóloga de la Pontificia Universidad Javeriana,
                            con 30 años de experiencia en los temas de
                            <span style="color:black;">Talento Humano</span> especialmente en el sector
                            servicios, actualmente jefe de bienestar y SST
                            del Banco W.
                          </b></h6>
                        </p>
                      </div>
                     <!-- <div class="card-footer">
                        <small class="text-muted"><h6>Kometsales</h6></small>
                      </div>-->
                    </div>
                  </div>
  
                </div>
              </div>
                <!--end cards-->
            </div>
        </section>
        <!-- Content-->
          <div class="col-auto p-2 text-center" style="background-color: #eba506">
            <!--<h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;CONFERENCISTA</font></h1>-->
            <h2 class="font-weight-bold"  style="color:white;"><fonts  id="titulo" size="6">&nbsp;&nbsp;</fonts></h2>
          </div>
          <!--moderador-->
          <section id="about">
            <div class="container px-2">
            <div class="row gx-0 align-items-center">
                   <div class="col-lg-1"></div>
                    <div class="col-lg-3" >
                        <img class="img-fluid rounded-circle" src=" {{ asset('dist/assets/img/portfolio/manuel.jpg')}}" alt="..." />
                    </div>                                                               
                    <div class="col-lg-7">
                           <br><br>
                           <div class="container-flex" style="padding-left:1em; padding-right:1em;">
                            <h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6">Manuel Castrillón</font></h1>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>MBA (Maestría Administración de Empresas)</b></h6>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>Especialista en Mercadeo y Gamificación</b></h6>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78;"><b>Ingeniero de Sistemas</b></h6>
                            <br>
                            <h6 style="font-family: Open Sans; font-size: 113%; text-align:justify; color:#7A7A78; line-height:1.5;"><b>Con más de 12 años de experiencia en el mundo del diseño de experiencias de aprendizaje y la gamificación para el mundo corporativo, Manuel y su equipo moderarán <span style="color:#4b42bf;">METATALKS</span> un evento
                                 completamente disruptivo e inversivo para que adquieras nuevos aprendizajes.</b>
                            </h6> 
                            <h5>¡Te esperamos!</h5>
                           </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <br>
          <!--end moderador-->
          <div class="col-auto text-center" style="background-color: #eba506; margin-bottom:-2em;">
            <!--<h1 class="text-white font-weight-bold" ><font color="#4b42bf" id="titulo" size="6"><i class="bi bi-person-fill"></i>&nbsp;&nbsp;CONFERENCISTA</font></h1>-->
            <h2 class="font-weight-bold"  style="color:white;"><fonts  id="titulo" size="6">&nbsp;&nbsp;</fonts></h2>
          </div>
        <div class=" masthead">
            <div class="row"  style="padding-top:3rem; padding-bottom:5px; padding-left:4rem;">
              <div class="col-md-7">
                <!---contenedor lado izquierdo-->
                <div class="container">
                  <div class="col-auto p-2 text-justify">
                    <h1  style="color:white;"><fonts id="titulo">ReconoSER</fonts></h1><br>
                    <h3 class="font-weight-bold"  style="color:#eba506;"><fonts  id="titulo" size="6">Entrada GRATUITA</fonts></h3><br>
                    <h2 class="font-weight-bold"  style="color:white;"><fonts  id="titulo" size="6"><i class="bi bi-calendar-check"></i>&nbsp;&nbsp;MIÉRCOLES 5 DE OCTUBRE</fonts></h2><br>
                    <h2 class="font-weight-bold"  style="color:white;"><fonts  id="titulo" size="6"><i class="bi bi-alarm"></i>&nbsp;&nbsp;8:00 AM HORA DE COLOMBIA</fonts></h2>
                  </div>
               </div>
                <!--end contenedor-->
              </div>
              <div class="col-md-5">
                   <!--formulario-->
                   <div class="container">
                   <h1 class="font-weight-bold"  style="color:#239FB8;"><fonts id="titulo" size="6">INSCRIBETE</fonts></h1><!-- color="#4b42bf"-->
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
                          <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                          <input type="email" class="form-control" id="correocon" name="correocon" placeholder="Confirma tu correo"  autocomplete="on" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="input-group has-validation">
                          <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  autocomplete="off" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn float-end" type="submit" style="background-color:#eba506; color:white;">Enviar</button>
                      </div>
                    </form>
                    </div>
                   <!--end formulario-->
              </div>
            </div>
           </div>
         <!--end form-->
         
       <!-- <div class="container">
        <div class="align-self-baseline d-sm-block d-block d-sm-block d-md-none">
        <br>
        <div class="col-lg-8 align-self-end">
          <h1 class="text-left text-white font-weight-bold" ><font color="#4b42bf" id="titulo">&nbsp;&nbsp;&nbsp;Apoya</font></h1>
          </div>
          <br>
          <img class="rounded mx-auto d-block" src="{{ asset('dist/assets/img/portfolio/events.png')}}" width="250px" height="50px">
          <br>
        </div>
        </div>-->
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
       <!-- <div class="col-auto p-5 text-rigth" style="background-color: #4b42bf">
               
        </div>-->

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
