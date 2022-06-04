<x-app-layout>
    <x-slot name="header">
    </x-slot>   
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  </head>
  <body>
  @if(Session::has('envio'))
      <div class="alert alert-dismissible fade show" role="alert" style="background-color:#66efa5;">
      <strong>&nbsp;{{Session::get('envio')}}</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
    <div class="container-fluid text-center">
    <br>
    <div class="row">
      <div class="col-4">
        <h3 class="d-none d-sm-none d-md-block">Reporte</h3>
        <label class="d-block d-sm-block d-md-none">Reporte</label>
         <a href="{{route('descarga')}}" type="button" class="btn btn-primary">Descargar</a>
      </div>
      <div class="col-4">
      <h3 class="d-none d-sm-none d-md-block">Recordatorio</h3>
        <label class="d-block d-sm-block d-md-none">Recordatorio</label>
       <a href="{{route('recordar')}}" type="button" class="btn btn-success">Enviar</a>
     </div>    
     <div class="col-4">
        <h3 class="d-none d-sm-none d-md-block">Usuarios</h3>
        <label class="d-block d-sm-block d-md-none">Usuarios</label>
       <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Ver 
        </button>

        <!-- Modal -->
        <form action="{{route('reporusu')}}" method="POST">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Filtrar usuarios</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!---formulario -->
               
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-person-lines-fill"></i></label>
                  </div>
                  <select class="form-control" id="grupo" name="grupo">
                    <option selected>Elegir grupo ...</option>
                    <option value="2944">Evento Metaversos</option>
                    <option value="2970">Celsia</option>
                    <option value="2945">Grupo por defecto</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-book-half"></i></span>
                  </div>
                  <input type="number" class="form-control" placeholder="Pagina ejm. 1" aria-label="Username" aria-describedby="basic-addon1" name="pag">
                </div>
                <!--end formulario-->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>
          </div>
        </div>
        </form>
        <!--end modal-->
     </div>
    </div>
    </div>
    <br><br>
    <!--botones--dos-->
    <div class="container-fluid text-center">
    <div class="row">
      <div class="col-4">
         <h3 class="d-none d-sm-none d-md-block">Grupos</h3>
         <label class="d-block d-sm-block d-md-none">Grupos</label>
           <!-- Button trigger modal -->
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-file-earmark-plus-fill"></i>
            </button>
           
            <!-- Modal -->
            <form action="{{route('grupos')}}" method="POST">
              @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Grupos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <!--formulario de registro-->
                     
                          <div class="mb-3">
                            <input type="text" class="form-control" id="cod" name="cod" aria-describedby="emailHelp" placeholder="Código">
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control" id="des" name="des" placeholder="Descripción">
                          </div>
            
                    <!--end form -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
              <!---end mnodal-->
      </div>
      <div class="col-4">
         <h3 class="d-none d-sm-none d-md-block">Roles</h3>
         <label class="d-block d-sm-block d-md-none">Roles</label>
          
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <i class="bi bi-file-earmark-plus-fill"></i>
            </button>

            <!-- Modal -->
            <form action="{{route('roles')}}" method="POST">
              @csrf
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registar Roles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <!--formulario de registro-->
                     
                          <div class="mb-3">
                            <input type="text" class="form-control" id="cod" name="cod" aria-describedby="emailHelp" placeholder="Código">
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control" id="des" name="des" placeholder="Descripción">
                          </div>
            
                    <!--end form -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
            <!---end modal-->
      </div>
      <!--vincular-->
      <div class="col-4">
        <h3 class="d-none d-sm-none d-md-block">Vincular</h3>
          <label class="d-block d-sm-block d-md-none">Vincular</label>
        <a href="{{route('vincular')}}" type="button" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i></a>
      </div>
      <!--vincular-->
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    



</x-app-layout>
