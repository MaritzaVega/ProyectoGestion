   
 <?php

include "SuperiorA.php";

//Cargo
include "../modelo/clcargo.php";
$cargo = new Cargo();
$datos = $cargo->buscarCargo();
//


?>
<div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema de gestión de ventas Admin <small>Registra Usuario</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido a la sección en la que puede registrar nuevos usuarios 
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="registraUsuario.php">Registra Usuario</a></li>
                    </ol>
                </div>
            </div>
        </div>
</div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Formulario de Registro</div>
                <form class="form-padding" method="post" action="../controlador/registraUsuario.php">
                    <div class="row">

                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-wrench zmdi-hc-fw"></i> &nbsp; Registro</legend><br>
                        </div>
                        
                        <div class="col-xs-12 col-sm-6">
                            <label>Nombre(s): </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" type="text" name="nombre" id="nombre" autocomplete="off" required  />    
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div> 

                        <div class="col-xs-12 col-sm-6">
                            <label>Apellidos(s): </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" type="text" name="apellidos" id="apellidos" autocomplete="off" required  />    
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div> 

                        <div class="col-xs-12 col-sm-6">
                            <label>N° Documento de Identidad: </label>
                            <div class="group-material">
                                <div class="form-group">
                                <input  for="fecha" class="material-control tooltips-general" type="number" id="numDoc" name="numDoc" required="">
                                </div>
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        
                          <!--     Cargo     -->
                <div class="col-xs-12 col-sm-6">
                    <label>Cargo: </label>
                        <div class="group-material">
                            <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" name="cargo">

                                <?php while ($d = mysqli_fetch_array($datos)) {?> 
                                            
                                    <option value="<?php echo $d['idcargo']?>">
                                        <?php echo $d['nomcargo'] ?>
                                    </option>

                                <?php } ?> 

                            </select>
                        </div>
                </div> 
                        <!--     Cargo    -->

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
