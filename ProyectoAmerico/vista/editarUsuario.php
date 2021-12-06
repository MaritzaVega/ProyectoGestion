<?php

include "SuperiorA.php";

include "../modelo/clempleados.php";
$empleado = new Empleado();
$identi = $_REQUEST['idusuario'];
$empleado->buscarEmpleado($identi);


//Cargo
include "../modelo/clcargo.php";
$cargo = new Cargo();
$datos = $cargo->buscarCargo();
//
 

?>
   <div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema De Gestión de Ventas <small>Editar Usuario</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido usuario, gracias a esta sección puede modificar los datos de los usuarios.
                </div>
            </div>
        </div>

       

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="editarUsuario.php">Editar Usuario</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-green">Datos Personales</div>
                <form class="form-padding" method="post" action="../controlador/editarUser.php">
                    <div class="row">
                        <div class="col-xs-12" >
                            <legend style="color: #FFF5F4"><i class="zmdi zmdi-assignment-account" style="color: #FFF5F4"></i> &nbsp; Usuario</legend><br>
                        </div>
                                                
                        <div class="col-xs-12 col-sm-6" >
                            <label style="color: #FFF5F4">Nombre completo del Usuario: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre" value="<?php echo $empleado->nombre?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label style="color: #FFF5F4">Apellidos completos del Usuario: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="apellidos" value="<?php echo $empleado->apellidos?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label style="color: #FFF5F4">Número de Documento: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="numDoc" readonly value="<?php echo $empleado->numDoc?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                        <label style="color: #FFF5F4">Cargo: </label>
                                <div class="group-material">
                                    <select class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" name="cargo" >
                                        
                                        <?php while ($d = mysqli_fetch_array($datos)) {?> 

                                                  
                                            <option <?php   if($empleado->cargo==$d['nomcargo']){?>

                                                selected
                                            
                                            <?php
                                            }  
                                            ?>
                                            
                                            value="<?php echo $d['idcargo']?>">
                                                <?php echo $d['nomcargo'] ?>
                                            </option>

                                        <?php } ?> 

                                    </select>
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
