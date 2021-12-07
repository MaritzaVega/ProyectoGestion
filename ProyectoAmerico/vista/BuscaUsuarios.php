<?php 
error_reporting(0);

include "../modelo/clusuarios.php";
$listausuario = new Usuario();


include "SuperiorA.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema de gestión de ventas <small>Búsqueda de Usuarios</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/flat-book.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                Bienvenido a la sección donde se hará la búsqueda de usuarios en el Sistema<br>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="BuscaUsuarios.php">Búsqueda de Usuarios</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
           
            <form class="col-xs-12"class="pull-right" style="width: 30% !important;" action="" method="post">

                 <!--Busqueda del Usuario-->
                <div class="group-material">
                    <input type="search" name="buscauser" id="buscauser" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Usuario"  data-toggle="tooltip" data-placement="top" title="Escribe el nombre del Usuario a buscar">

                    <button class="btn" style="margin: 0; height: 43px; color:white; background-color: transparent !important;">
                            <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                     </button>

                </div>
            </form>

        

            <h2 class="text-center all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4">listado de Usuarios</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">

                        <div class="div-table-cell" style="width: 5%;">NOMBRE</div>
                        <div class="div-table-cell" style="width: 5%;">APELLIDOS</div>
                        <div class="div-table-cell" style="width: 5%;">N° DOCUMENTO</div>
                        <div class="div-table-cell" style="width: 5%;">CARGO</div>
                   
                        
                    </div>

                </div>
                    <div class="table-responsive">
                        <div class="div-table" style="margin:0 !important;">
                                
                                <?php  
                                    $text = $_POST['buscauser'];
                                    if (isset($text)){
                                    $listausuario->Buscar($text); 
                                    }else{
                                        $listausuario->listarBusqueda();
                                    }
                                ?>      
                        </div>
                    </div>
                
                </div>
        </div>





<?php 
include "Inferior.php"
?>  </div>
