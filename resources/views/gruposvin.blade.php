
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <title>Administrador</title>
  </head>
<body> 

<div class="row">
    <div class="col-6">
        <div class="alert alert-primary" role="alert">
            <h2 class="text-center">Elegir Grupo</h2>
        </div>
     <div class="table-responsive" style="padding-left:10px; padding-right:10px;">
     <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Grupo</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
             $c=1;
            ?>
            @foreach($grupo as $g)
                <tr>
                    <th scope="row">{{$c++}}</th>
                    <td>{{$g->iden}}</td>
                    <td>{{$g->nombre}}</td>
                    <td>
                        <a href="/eliminar/grupo/{{$g->id}}" type="button"><i class="bi bi-trash" style="font-size:1.5rem; color:red;"></i>&nbsp;&nbsp;</a>
                        @if($g->estado==1)
                        <!-- Button trigger modal -->
                            <a type="button" data-toggle="modal" data-target="#exampleModal{{$g->id}}">
                            <i class="bi bi-toggle-off " style="font-size:1.5rem;"></i>
                            </a>
                        @endif
                        @if($g->estado==2)
                        <!-- Button trigger modal -->
                            <a type="button" data-toggle="modal" data-target="#exampleModal{{$g->id}}">
                            <i class="bi bi-toggle-on" style="font-size:1.5rem;"></i>
                            </a>
                        @endif

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$g->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   Desea elegir el grupo: {{$g->nombre}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                                    <a href="/cambiar/estado/{{$g->id}}" type="button" class="btn btn-primary">Elegir</a>
                                </div>
                                </div>
                            </div>
                            </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
    </div>
    <div class="col-6">
        <div class="alert alert-primary" role="alert">
                <h2 class="text-center">Elegir Rol</h2>
        </div>
    <div class="table-responsive" style="padding-left:10px; padding-right:10px;">
     <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
             $conta=1;
            ?>
            @foreach($rol as $r)
                <tr>
                    <th scope="row">{{$conta++}}</th>
                    <td>{{$r->idrol}}</td>
                    <td>{{$r->nombre}}</td>
                    <td>
                    <a href="/eliminar/rol/{{$r->id}}" type="button"><i class="bi bi-trash" style="font-size:1.5rem; color:red;"></i>&nbsp;&nbsp;</a>
                            @if($r->estado==1)
                             <!-- Button trigger modal -->
                                <a type="button" data-toggle="modal" data-target="#exampleModal1{{$r->id}}">
                                <i class="bi bi-toggle-off " style="font-size:1.5rem;"></i>
                                </a>
                            @endif
                            @if($r->estado==2)
                            <!-- Button trigger modal -->
                                <a type="button" data-toggle="modal" data-target="#exampleModal1{{$r->id}}">
                                <i class="bi bi-toggle-on" style="font-size:1.5rem;"></i>
                                </a>
                            @endif

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1{{$r->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    Desea elegir el rol: {{$r->nombre}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                                        <a href="/cambiar/estado/rol/{{$r->id}}" type="button" class="btn btn-primary">Elegir</a>
                                    </div>
                                    </div>
                                </div>
                                </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            </div>
     </div>
  </div>
<div class="container-fluid">
 <div class="row">
     <div class="col-12">
         <a href="/dashboard" class="btn btn-success float-right" type="button">Volver</a>
     </div>
 </div>
 </div>
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
