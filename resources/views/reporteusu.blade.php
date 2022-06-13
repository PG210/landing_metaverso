<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Administrador</title>
  </head>
<body> 
<div class="alert alert-primary" role="alert">
   <h2 class="text-center">Listado de usuarios</h2>
</div>
 <div style="padding-left:10px; padding-right:10px;">
<table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Grupo</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $current_page = $usu['result']['api-user-list']['current-page'];
                $total_pages = $usu['result']['api-user-list']['pages'];
                do{
                 $rs = count($usu['result']['api-user-list']['current-page'][$current_page]);
                  
                  //total_pages = rs.total_pages
                  echo $rs;
                  $current_page++;
                } while ($current_page < $total_pages);

                    $var = count($usu['result']['api-user-list']['items']);
                        $con=1;
                        for($i=0;$i<$var;$i++) {
                            if(isset($usu['result']['api-user-list']['items'][$i]['email']) && isset($usu['result']['api-user-list']['items'][$i]['permission-groups'][0]['name'])){//evalua si esta definidos

                                echo '<tr>
                                <td>'.$con++.'</td>
                                <td>'.$usu['result']['api-user-list']['items'][$i]['id'].'</td>
                                <td>'.$usu['result']['api-user-list']['items'][$i]['login'].'</td>
                                <td>'.$usu['result']['api-user-list']['items'][$i]['email'].'</td>
                                <td>'.$usu['result']['api-user-list']['items'][$i]['first-name'].'</td>
                                <td>'.$usu['result']['api-user-list']['items'][$i]['last-name'].'</td>
                                <td>'.$usu['result']['api-user-list']['items'][$i]['permission-groups'][0]['name'].'</td>
                                </tr>';

                            }
                        
                            
                        }
                    ?>
            </tbody>
            </table>
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


           <!---end table-->

<!--links-->
<!--https://www.youtube.com/watch?v=QEJGxpxdgl4&ab_channel=Streamelopers-->
<!--https://www.youtube.com/watch?v=_bo2fB65iu0&ab_channel=AdersonJara-->
<!--https://developer.mozilla.org/es/docs/Learn/JavaScript/Objects/JSON-->
<!--https://kennyhorna.com/blog/novedades-de-laravel-7-el-nuevo-facade-http-consultas-nativas-a-servicios-externos-96beb9fa-13ee-4e0b-adbf-270d64135a85-->
<!--https://stackoverflow.com/questions/68386392/authorization-with-token-in-guzzlehttp-laravel-php-->