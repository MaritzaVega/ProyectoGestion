<?php 
error_reporting(0);

include "../modelo/clusuarios.php";
$listausuario = new Usuario();


include "SuperiorV.php"
?>

<div style="background-image: url('../assets/img/fondoA.jpg');">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema de gestión de ventas <small>Emitir Boleta de Venta</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/flat-book.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4">
                Bienvenido a la sección donde se emitira la boleta de venta<br>
                </div>
            </div>
        </div>

        <div class="Cabecera">
        <Label>BOLETA DE VENTA  </Label>
        </div>
  <!--PROBANDO OTRO TIPO DE DISEÑO DE TABLA--!-->

        <div class="Tabla1">
            <table class="table">
                <tr>
                    <th>
                    <p>Codigo de vendedor </p>
                    <span  type="number"  class="all-tittles" ><?php echo $u;?></span>
                    <br>
                    <br>
                </th>

                <th colspan="2"> 
                <p>Vendedor</p>
                <span  type="text"  class="all-tittles" ><?php echo $nom;?></span>
                    <br>
                    <br>
                </th>

                <th>
                   
                </th>

                <th rowspan="3" style="background-color:#303f9f ; width:70%; height: 100%; color:#FFFFFF; border-radius: 3px;">
					<br>
                    <br>
				</div>
                
                <div class="tabla-label" >
					    <label> Boleta de venta </label>
					    <br>
					</div>

                    <div class="table-label2" >
                    <br>
					    <label style="margin: 0px 0px 0px 60px;">N°</label> 
                        <input style="width: 50%; align-items: center;" type="number" placeholder="00000000">
                        <br>
                        <br>
                        
                        <hr style="color: #7f0000; margin: px 0px 0px -10px;">
                        <p style="color:#FFFFFF">Fecha de emision:</p>
                       <input style="margin: 10px 3px 20px 30px; text-align: center;" type="date" name="fecha">
                    </div>
					
                </th>

                </tr>
                
                <tr>
                <th>
                <p>Cliente</p>
                    <input  type="text"  class="all-tittles" >
                    <br>
                    <br>
                </th>
                <th>
                <p style="margin: -10px 50px 0px -5px;">Tipo Documento</p>
                    <select style="color:#ffffff ;margin: 0px -50px 0px 10px; background-color: #777777; border-radius: 5px;" name="Tdocumento"> 
                        <option>DNI</option> 
                        <option>PASAPORTE</option> 
                    </select> 
                </th>
                
                <th>
                <label  style="font-weight:900; padding: 0px 40px 15px 100px;"> Número de Documento</label>
                    <input  style=" margin: 0px 20px 10px 100px;" type="number"  class="all-tittles" >
                    <br>
                    <br>
                </th>
                </tr>
                <tr>
                    <th>
                        <p>Dirección</p>
                        <input style="margin: 0px 20px 0px 20px ; width: 150%;" type="text"  class="all-tittles" >
                        <br>
                        <br>
                        
                    </th>

                    <th colspan="2">
                    <p style="margin: 0px 0px 0px 210px;">Celular</p>
                        <input style="margin: 10px 0px 0px 220px;" type="number"  class="all-tittles" >
                        <br>
                        <br> 
                    </th>
                </tr>
            </table>
        </div>

        <br>

        <div class="Tabla2">
        <table>
                <tr>
                    <th>
                    <label style="padding: 10px 0px 10px 10px; font-weight: 700;">Buscar producto</label>
                     <input style = "margin: 0px 0px 0px 15px; width: 750%;"type="search" name="buscauser" id="buscauser" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Producto"  data-toggle="tooltip" data-placement="top" title="Escribe el nombre del Producto a buscar">
            
               <button style = "margin: 10px 20px 20px 30px; " type="submit" onclick="document.location = 'ListaProductoStock.php'" name="signup" class="btn btn-primary">  BUSCAR </button>
                    </th>
                </tr>
        </table>
        </div>
        </div>

<br>
<br>
<br>
      <!--</div class="container-fluid"  >
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-red">Boleta de Venta</div>
                <form class="form-padding" method="post" action="../controlador/registraUsuario.php">
-->       
       
       <!--
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="BuscaUsuarios.php">Búsqueda de Productos</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">

-->   
           

    <!--Busqueda del Producto-->
                

            <label class="text-center all-tittles" style="padding: 15px 10px 10px 20px; color: #FFFFFF; background-color: #7f0000;">Productos Solicitados</label>
            <div class="table-responsive" style = "margin: 20px 30px 0px 30px ">
                <div class="div-table" style="margin:0 !important;">
                    
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">

                        <div class="div-table-cell" style="width: 5%;">PRODUCTO</div>
                        <div class="div-table-cell" style="width: 5%;">P. UNITARIO</div>
                        <div class="div-table-cell" style="width: 5%;">CANTIDAD</div>
                        <div class="div-table-cell" style="width: 5%;">TOTAL</div>
                        <div class="div-table-cell" style="width: 5%;">OPCIONES</div>
                   
                        
                    </div>
                    

                </div>
                    <div class="table-responsive">
                        <div class="div-table" style="margin:0 !important;">
                                
                                <?php  
                                    $text = $_POST['buscauser'];
                                    if (isset($text)){
                                    $listausuario->Buscar($text); 
                                    }else{
                                        $listausuario->listarBusqueda();
                                    }
                                ?>      
                        </div>
                    </div>
                
                </div>
        
        <div>                        
                <p class="text-right">
                    <button style = "margin: 20px 20px 0px 0px " type="submit" onclick="document.location = 'RegistraUsuario.php'" name="signup" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Generar Boleta de venta </button>
                </p> 
            </div>




<?php 
include "Inferior.php"
?>  
