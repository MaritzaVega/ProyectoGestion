<?php

include "SuperiorA.php";

include "../modelo/clempleados.php";


$empleado = new Empleado();
$empleado->buscarEmpleado($u);



?>
   <div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema Comercial Usuario <small>Mi perfil</small></h1>
            </div>
        </div>
        
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido usuario, gracias a esta sección puede verificar sus datos personales
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="profileU.php">Mi Perfil</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-green">Datos Personales</div>
                <form class="form-padding">
                    <div class="row">
                        <div class="col-xs-12" >
                            <legend style="color: #FFF5F4"><i class="zmdi zmdi-assignment-account" style="color: #FFF5F4"></i> &nbsp; Usuario</legend><br>
                        </div>
                                                
                        <div class="col-xs-12 col-sm-6" >
                            <label style="color: #FFF5F4">Nombre completo del empleado: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="nombre-empleado" readonly="readonly" value="<?php echo $empleado->nombres," ",$empleado->apellidos?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label style="color: #FFF5F4">E-mail: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="email-empleado" readonly="readonly" value="<?php echo $empleado->email?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label style="color: #FFF5F4">Celular: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="celular-empleado" readonly="readonly" value="<?php echo $empleado->celular?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label style="color: #FFF5F4">Género: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="genero-empleado" readonly="readonly" value="<?php echo $empleado->genero?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label style="color: #FFF5F4">N° documento: </label>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" name="numerodoc-empleado" readonly="readonly" value="<?php echo $empleado->numerodoc?>">   
                                <span class="highlight"></span>
                                <span class="bar"></span>                                
                            </div>
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
</div>