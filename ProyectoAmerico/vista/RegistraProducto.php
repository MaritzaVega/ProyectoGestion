<?php

include "SuperiorA.php";



?>
<div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema de gestión de ventas Admin <small>Registra Producto</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/resgisproducto.png" style="width: 100px;" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                <br>
                    Bienvenido a la sección en la que puede registrar nuevos productos 
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="RegistraProducto.php">Registra Productos</a></li>
                    </ol>
                </div>
            </div>
        </div>
</div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Formulario de Registro</div>
                <form class="form-padding" method="post" action="../controlador/registraProducto.php">
                    <div class="row">

                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-wrench zmdi-hc-fw"></i> &nbsp; Registro</legend><br>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6">
                            <label>Nombre del Producto: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" type="text" name="nombre" id="nombre" autocomplete="off" required  />    
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div> 

                        <div class="col-xs-12 col-sm-6">
                            <label>Marca: </label>
                            <div class="group-material">
                            <input type="text" class="material-control tooltips-general" type="text" name="marca" id="marca" autocomplete="off" required  />   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div> 

                        <div class="col-xs-12 col-sm-6">
                            <label>Precio: </label>
                            <div class="group-material">
                                <div class="form-group">
                                <input type="number" class="material-control tooltips-general" placeholder="S/.00" name="precio" id="precio" autocomplete="off" required  />
                                </div>
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        
                          <!--     Stock   -->
                <div class="col-xs-12 col-sm-6">
                    <label>Stock: </label>
                        <div class="group-material">
                        <input type="text" class="material-control tooltips-general" type="text" name="stock" id="stock" autocomplete="off" required  />   
                                <span class="highlight"></span>
                                <span class="bar"></span>    
                        </div>
                </div> 

                          <!--     Estado del Stock   -->
                          <div class="col-xs-12 col-sm-6">
                    <label>Estado del Stock: </label>
                        <div class="group-material">
                        <input type="text" class="material-control tooltips-general" type="text" name="estadoStock" id="estadoStock" autocomplete="off" required  />   
                                <span class="highlight"></span>
                                <span class="bar"></span>    
                        </div>
                </div> 

                

                        <!--     Btn guardado    -->

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