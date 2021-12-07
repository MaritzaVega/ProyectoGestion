<?php 

include "../modelo/clusuarios.php";
$listausuario = new Usuario();


include "SuperiorA.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema de gestión de ventas <small>Lista de Usuarios</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido a la sección donde se encuentra el listado de usuarios registrados en el Sistema.<br>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="ListaUsuarios.php">Listado de Usuarios</a></li>
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
                        <div class="div-table-cell" style="width: 4%;">APELLIDOS</div>
                        <div class="div-table-cell" style="width: 6%;">N° DOCUMENTO</div>
                        <div class="div-table-cell" style="width: 4%;">CARGO</div>
                        <div class="div-table-cell" style="width: 5%;"></div>
                        <div class="div-table-cell" style="width: 3%;"></div>

                        
                    </div>

                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list">

                            <?php
                                $listausuario->listar();
                            ?>

                        </div>
                    </div>
                </div>
                
                </div>
            </div>





<?php 
include "Inferior.php"
?>  </div>
