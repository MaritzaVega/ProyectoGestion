<?php 

include "../modelo/clproductos.php";
$listaproducto = new Producto();


include "SuperiorV.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema de gestión de ventas Vendedor <small>Lista de Productos segun Stock</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/productos.png" style="width : 25%" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                <br>
                    Bienvenido a la sección donde se encuentra el listado de productos segun stock<br>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="ListaProducto.php">Buscar Productos</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
       
        <table>
                <tr>
                    <th>

                    <label style="clear: both; margin: 20px 0; color: #FFF5F4">Estado</label>
                    <br>
                    <select name="Estado"> 
                        <option>ALTO</option> 
                        <option>BAJO</option> 
                    </select> 
            
               <button style = "margin: 10px 20px 20px 30px; " type="submit" onclick="document.location = 'ListaProductoStock.php'" name="signup" class="btn btn-primary">gitBUSCAR </button>
                    </th>
                </tr>
        </table>
        </div>
            <h2 class="text-center all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4">Listado de Productos</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">

                        <div class="div-table-cell" style="width: 4%;">NOMBRE</div>
                        <div class="div-table-cell" style="width: 4%;">MARCA</div>
                        <div class="div-table-cell" style="width: 6%;">PRECIO</div>
                        <div class="div-table-cell" style="width: 4%;">STOCK</div>
                        <div class="div-table-cell" style="width: 5%;">ESTADO DE STOCK</div>
                        <div class="div-table-cell" style="width: 5%;">ESTADO</div>
                      
                        
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
