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
                sistema de ventas
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <!--Logo de Vendedor-->
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                    <img src="../imagenes/logo.JPG" alt="Biblioteca" class="img-responsive center-box" style="width:100%;">
            </div>
            <p class="text-center" style="padding-top: 15px; color:#ffffff; font-weight: 900;"> Menú del Sistema</p>

            <div class="nav-lateral-divider full-reset" ></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="HomeVendedor.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-wrench"></i>&nbsp;&nbsp; Operación <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="EmitirBoletaVenta.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Emitir Boleta de Venta</a></li>
                             <!--<li><a href="BuscaAlumnoA.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Alumno</a></li>-->
                       
                            
                        </ul>
                    </li>
                    
                    <!--     -->
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="ReporteBalanceVenta.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Emitir Reporte de Balance de Venta</a></li>
                             <!--<li><a href="BuscaAlumnoA.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar Alumno</a></li>-->
                            <li><a href="ListaProductoStock.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Emitir Reporte de Inventario</a></li>
                            
                        </ul>
                    </li>
                      

                    
<!--   
                     <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Autores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="ListaAutoresA.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Listar Autores</a></li>
                            <li><a href="RegistraAutor.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Registrar Autor</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Editoriales <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="ListaEditorialesA.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Listar Editoriales</a></li>
                            <li><a href="RegistraEditorial.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Registrar Editorial</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="ListaProveedoresA.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Listar Proveedores</a></li>
                            <li><a href="RegistraProveedor.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Registrar Proveedor</a></li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos y reservaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="ListaPrestamosA.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Lista</a></li>
                            <li><a href="LibrosxDevolver.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Libros por Devolver</a></li>
                        </ul>
                    </li>-->

                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Cuenta <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="profileU.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Mi Perfil</a></li>
                            <li><a href="CambiarContrasenaAdmin.php"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Cambiar Constraseña</a></li>
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