<?php 
error_reporting(0);

include "../modelo/clusuarios.php";
$listausuario = new Usuario();


include "SuperiorV.php"
?>

<div style="background-color: #192226;">
<div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">sistema de gestión de ventas <small>Emitir Boleta de Venta</small></h1>
            </div>
        </div>
        <div class="container-fluid"  style="margin: 20px 10px;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/img/flat-book.png" style="margin: 0px 0px 50px 200px; width: 30%;" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead" style="color: #FFF5F4; padding-top: 30px ; width: 30%;">
                Bienvenido a la sección donde se emitira la boleta de venta<br>
                </div>
            </div>
        </div>
       
      </div class="container-fluid"  >
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-red">Boleta de Venta</div>
                <form class="form-padding" method="post" action="../controlador/registraUsuario.php">
    <div class="Cabecera"></div>
    <table>
        <tr>	
		<th>
         <p style="margin: 0px 0px 0px 21px">Codigo de vendedor</p>
         <span  type="text"  style="margin: 10px 300px 0px 20px" class="all-tittles"> <?php echo $u;?></span>
		 <br>
         <br>
         <p style="margin: 0px 0px 0px 21px">Cliente:</p>
											         	
													<input type="text" name="cliente"style="margin: 10px 300px 0px 20px">	
                                                    
                                                    <br>
														<br>
                                                        <p style="margin: 0px 0px 0px 21px">Direccion:</p>
											         	
													<input type="text" name="Direccion" style="margin: 10px 300px 0px 20px">
														
										</th>
										<th> 
                                                        <p style="margin: 20px 10px 2px 4px">Vendedor:</p>
														
														<input type="text" name="vendedor" style="margin:0px 360px -2px 0px">
														<br>
														<br>
                                                        <p style="margin: 0px 0px 6px 4px">tipo documento: </p>
														
                                                        <select name="Tdocumento" style="margin:0px 0px 2px 0px" > 
                                                       <option>DNI</option> 
                                                       <option>PASAPORTE</option> 
                                                       </select> 
                                                        <input type="number" size="24" maxlength="30" value="numero" name="documento" required >
														<br>
														<br>
                                                        <p style="margin: 0px 0px 13px 4px">	Celular: </p>
											      
													<input type="number" name="celular" style="margin:0px 100px 26px 0px">
														</th>
										<th>
														<div style="background-color:blue; width:70% ; height:100% ; top:10px ;">......</div>
																		<div style="background-color:red ; width:70%">
																		Boleta de venta
																		<br>
																		</div>
																		<div style="background-color:blue; width:70% ; height:100% ; top:10px">
																		N° <input  style="width:50% ; margin:55px 300px 80px 20px" type="number" placeholder="00000000">
														</div>
										</th>
					                    </tr>
							
				                    	<tr>
								
					</tr>
					</table>

                        
                    <p style="margin: 20px 10px 2px 1050px">Fecha de emision:</p>
                        <p class="text-right" >
                    
                       <input type="date" name="fecha">
                       </p>
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
                 <h2 class="text all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4"> Buscar producto</h2>
                <div class="group-material"> <input type="search" name="buscauser" id="buscauser" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar Producto"  data-toggle="tooltip" data-placement="top" title="Escribe el nombre del Producto a buscar">
            
               <button type="submit" onclick="document.location = 'RegistraUsuario.php'" name="signup" class="btn btn-primary">  BUSCAR </button>
            
 

                </div>
            </form>

        

            <h2 class="text-center all-tittles" style="clear: both; margin: 25px 0; color: #FFF5F4">Productos Solicitados</h2>
            <div class="table-responsive">
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
        </div>
        <div>                        
                <p class="text-right">
                    <button type="submit" onclick="document.location = 'RegistraUsuario.php'" name="signup" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Generar Boleta de venta </button>
                </p> 
            </div>




<?php 
include "Inferior.php"
?>  </div>
