<?php 
error_reporting(0);

include "../modelo/clclientes.php";
$listacliente = new Cliente();

include "SuperiorA.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema Comercial Usuario<small>Búsqueda de Clientes</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/busqueda.png" alt="user" class="img-responsive center-box" style="max-width: 110px;" >
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido a la sección donde se hará la búsqueda de clientes en el Sistema, solo mostrará los clientes que se encuentran en un estado Realizado en el Sistema.<br>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="BuscaClientes.php">Búsqueda de Clientes</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <form class="pull-right" style="width: 30% !important;" action="" method="post">

                <!--Busqueda del cliente-->
                <div class="group-material">
                    <input type="search" name="buscalib" id="buscalib" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Cliente"  data-toggle="tooltip" data-placement="top" title="Escribe el nombre del Cliente a buscar">

                    <button class="btn" style="margin: 0; height: 43px; color:white; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>

                </div>
            </form>
            <h2 class="text-center all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4">Búsqueda de clientes</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 4%;">NOMBRE</div>
                        <div class="div-table-cell" style="width: 4%;">APELLIDO</div>
                        <div class="div-table-cell" style="width: 6%;">DIRECCION</div>
                        <div class="div-table-cell" style="width: 4%;">CALLE</div>
                        <div class="div-table-cell" style="width: 4%;">DISTRITO</div>
                        <div class="div-table-cell" style="width: 4%;">EMAIL</div>
                        <div class="div-table-cell" style="width: 4%;">CELULAR</div>
                        <div class="div-table-cell" style="width: 4%;">TIPO DOCUMENTO</div>
                        <div class="div-table-cell" style="width: 4%;">DOCUMENTO</div>
                        <div class="div-table-cell" style="width: 4%;">TIPO CLIENTE</div>
                    </div>
                </div>

                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                             
                            <?php  
                                $text = $_POST['buscalib'];
                                if (isset($text)){
                                   $listacliente->Buscar($text); 
                                }else{
                                    $listacliente->listar();
                                }
                            ?>      
                    </div>
                </div>

            </div>
        </div>



<?php 
include "Inferior.php"
?>  
</div>

