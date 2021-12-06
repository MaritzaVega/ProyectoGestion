<?php 
error_reporting(0);

include "SuperiorA.php"
?>
<head>
<script type="text/javascript">
    function valid(){

        if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value){

            alert("La nueva contraseña y el campo Confirmar contraseña NO coinciden  !!");
            document.chngpwd.confirmpassword.focus();
            return false;
        }
            return true;
    }
</script>
</head>
<div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema Comercial Usuario <small>Cambiar Contraseña</small></h1>
            </div>
        </div>

        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/contra.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                    Bienvenido a la sección de Cambiar Contraseña, solo debes colocar tu contraseña que deseas cambiar, la contraseña actual y confirmar la contraseña actual.
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a href="CambiarContrasenaAdmin.php">Cambio de Contraseña</a></li>
                    </ol>
                </div>
            </div>
        </div>
</div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">CAMBIAR CONTRASEÑA</div>

                <form class="form-padding" action="../controlador/cambioDeContrasenaAdmin.php" method="post" onSubmit="return valid();"  name="chngpwd">

                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-assignment-account"></i> &nbsp; Datos de la sección</legend><br>
                        </div>


                        <div class="col-xs-12 col-sm-4">
                            <div class="group-material">
                                <span>Actual Contraseña</span>
                                <input type="password" name="password" class="material-control tooltips-general" required=""  >
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-4">
                            <div class="group-material">
                                <span>Ingrese Nueva Contraseña</span>
                                <input type="password" name="newpassword" class="material-control tooltips-general" required="" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="group-material">
                                <span>Confirmar Nueva Contraseña</span>
                                <input type="password" name="confirmpassword" class="material-control tooltips-general" required="" >
                            </div>
                        </div>

                       <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>

                                <button type="submit" name="change" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                   </div>
                </form>
            </div>
        </div>
<?php 
include "Inferior.php"
?>    
