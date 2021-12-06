<?php 

include "../modelo/clclientes.php";
$listacliente = new Cliente();


include "SuperiorA.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema comercial usuario <small>Lista de Clientes</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/flat-book.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido a la sección donde se encuentra el listado de clientes registrados en el Sistema, solo mostrará los clientes que se encuentran en estado realizado en el Sistema.<br>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="ListaClientes.php">Listado de Clientes</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <h2 class="text-center all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4">listado de Clientes</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">

                        <div class="div-table-cell" style="width: 4%;">NOMBRE</div>
                        <div class="div-table-cell" style="width: 4%;">APELLIDO</div>
                        <div class="div-table-cell" style="width: 6%;">DIRECCION</div>
                        <div class="div-table-cell" style="width: 4%;">DISTRITO</div>
                        <div class="div-table-cell" style="width: 4%;">DOCUMENTO</div>
                        <div class="div-table-cell" style="width: 4%;">TIPO</div>
                        <div class="div-table-cell" style="width: 4%;">ESTADO</div>
                        <div class="div-table-cell" style="width: 4%;">ENCARGADO</div>
                    </div>

                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list">

                            <?php
                                $listacliente->listarME();
                            ?>

                        </div>
                    </div>
                </div>
                
                </div>
            </div>





<?php 
include "Inferior.php"
?>  </div>
