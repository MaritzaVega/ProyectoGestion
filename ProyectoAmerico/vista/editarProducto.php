<?php

include "SuperiorA.php";


include "../modelo/clproductos.php";
$producto = new Producto();
$identi = $_REQUEST['idproducto'];
$producto->buscarProducto($identi);


?>
   <div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema De Gestión de Ventas <small>Editar Producto</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido usuario, gracias a esta sección puede modificar los datos de los productos.
                </div>
            </div>
        </div>

       

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="editarProducto.php">Editar Producto</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-green">Datos del Producto</div>
                <form class="form-padding" method="post" action="../controlador/editarProduct.php">
                    <div class="row">
                        <div class="col-xs-12" >
                            <legend style="color: #FFF5F4"><i class="zmdi zmdi-assignment-account" style="color: #FFF5F4"></i> &nbsp; Producto</legend><br>
                        </div>
                                                
                        
                        <!-- Nombre -->                       
                        <div class="col-xs-12 col-sm-6">
                            <label>Nombre del Producto: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre" value="<?php echo $producto->nombre?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>Marca: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="marca" value="<?php echo $producto->marca?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>Precio: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="precio" value="<?php echo $producto->precio?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>Stock: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="stock" value="<?php echo $producto->stock?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>Estado del Stock: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="estadoStock" value="<?php echo $producto->estadoStock?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                       
                        <div class="col-xs-12">                        
                            <p class="text-center">
                                <button type="submit" name="signup" class="btn btn-danger"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar </button>
                            </p> 
                       </div>

                   </div>
                </form>
            </div>
        </div>
        
   
</body>
</html>

<?php 
include "Inferior.php"
?>
