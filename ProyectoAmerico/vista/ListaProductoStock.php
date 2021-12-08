<?php 

include "../modelo/clproductos.php";
$listaproducto = new Producto();

error_reporting(0);

include "SuperiorV.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema de gestión de ventas Vendedor <small>Emitir Reporte de Inventario</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/productos.png" style="width : 25%" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                <br>
                    Bienvenido a la sección donde se encuentra el reporte de inventario según stock de los productos<br>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="ListaProductoStock.php">Reporte Inventario</a></li>
                    </ol>
                </div>                
            </div>
        </div>
        <div class="container-fluid">
      
        <form class="col-xs-4" style="width: 30% !important;" method="post">
            <!--Busqueda del Producto por Stock-->
            <div class="group-material">
                <select  type="search" name="buscaStock" id="buscaStock" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Producto por stock"  data-toggle="tooltip" data-placement="top" title="Selecciona el stock a buscar"> 
                        <option>ALTO</option> 
                        <option>BAJO</option> 
                </select> 
                <button class="btn" style="margin: 0; height: 43px; color:white; background-color: transparent !important;">
                    <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                </button>
                              
            </div>
           
        </form>
        <button onclick="location.href='ListaProductoStock.php'" class="btn" style="margin: 0; height: 43px; color:white; background-color: transparent !important; align-items: rigth; justify-content: rigth;">
                    <i class="zmdi zmdi-replay" style="font-size: 25px;"></i>
        </button>  
          
                

        <div>
            <h2 class="text-center all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4">Listado de Productos según Stock</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">

                        <div class="div-table-cell" style="width: 4%;">NOMBRE</div>
                        <div class="div-table-cell" style="width: 4%;">MARCA</div>
                        <div class="div-table-cell" style="width: 6%;">PRECIO</div>
                        <div class="div-table-cell" style="width: 4%;">STOCK</div>
                        <div class="div-table-cell" style="width: 5%;">ESTADO DE STOCK</div>
                                           
                        
                    </div>

                </div>
            </div>
                    <div class="table-responsive">
                        <div class="div-table" style="margin:0 !important;">
                                
                                <?php  
                                    $text = $_POST['buscaStock'];
                                    if (isset($text)){
                                    $listaproducto->BuscarStock($text); 
                                    }else{
                                        $listaproducto->listarBusqueda();
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
