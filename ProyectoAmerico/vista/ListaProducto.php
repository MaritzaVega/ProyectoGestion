<?php 

include "../modelo/clproductos.php";
$listaproducto = new Producto();


include "SuperiorA.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema de gestión de ventas Admin <small>Lista de Productos</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/productos.png" style="width : 25%" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                <br>
                    Bienvenido a la sección donde se encuentra el listado de productos registrados en el Sistema.<br>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="ListaProducto.php">Listado de Productos</a></li>
                    </ol>
                </div>
            </div>
            <div>                        
                <p class="text-right">
                    <button type="submit" onclick="document.location = 'RegistraProducto.php'" name="signup" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; CREAR NUEVO PRODUCTO </button>
                </p> 
            </div>
        </div>
        <div class="container-fluid">

            <h2 class="text-center all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4">Listado de Productos</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">

                        <div class="div-table-cell" style="width: 4%;">NOMBRE</div>
                        <div class="div-table-cell" style="width: 4%;">MARCA</div>
                        <div class="div-table-cell" style="width: 6%;">PRECIO</div>
                        <div class="div-table-cell" style="width: 4%;">STOCK</div>
                        <div class="div-table-cell" style="width: 5%;">ESTADO DE STOCK</div>
                        <div class="div-table-cell" style="width: 5%;"></div>
                        <div class="div-table-cell" style="width: 3%;"></div>
                        
                    </div>

                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list">

                            <?php
                                $listaproducto->listar();
                            ?>

                        </div>
                    </div>
                </div>
                
                </div>
            </div>
            <br>






<?php 
include "Inferior.php"
?>  </div>
