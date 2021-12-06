<?php

include "../modelo/clusuariosadmin.php";
$u=$_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="../assets/icons/book.ico" />
    <script src="../js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../css/sweet-alert.css">
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="../js/modernizr.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/main.js"></script>
</head>

<body>
    <div class="navbar-lateral full-reset" style="background-image: url('../assets/img/admin.jpg');">  
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                EMPRESA AMERICO S.A
            </div>
            
            <div class="nav-lateral-divider full-reset"></div>
            <!--Logo de la Binlioteca-->
            <br>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../imagenes/logo.JPG" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <br>
                <p style="text-align: center;">MENU DE SISTEMA</p>
            </div>

            <div class="nav-lateral-divider full-reset" ></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <br>
                    <br>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Gestionar Usuario<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="ListaUsuarios.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Listar Usuario</a></li>
                            <li><a href="BuscaUsuarios.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Usuario</a></li>
                             <!--<li><a href="BuscaAlumnoA.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Alumno</a></li>-->
                            <li><a href="RegistraUsuario.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Usuario</a></li>
                            
                        </ul>

                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Gestionar Producto<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="ListaProducto.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Listar Producto</a></li>
                            <li><a href="BuscaProducto.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Producto</a></li>
                             <!--<li><a href="BuscaAlumnoA.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Alumno</a></li>-->
                            <li><a href="RegistraProducto.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Producto</a></li>
                            
                        </ul>

                    </li>
                    <!--     -->
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Cuenta <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="profileU.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Mi Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="../assets/img/user02.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Usuario : <?php echo $u;?></span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="../controlador/cerrarsesion.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>