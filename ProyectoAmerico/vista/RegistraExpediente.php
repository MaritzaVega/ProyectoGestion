<?php

include "SuperiorA.php";

//Distritos
include "../modelo/cldistritos.php";
$distrito = new Distrito();
$datos = $distrito->buscarDistrito();

//Pais
include "../modelo/clpais.php";
$pais = new Pais();
$datos1 = $pais->buscarPais();

//Documento
include "../modelo/cldocumento.php";
$documento = new Documento();
$datos2 = $documento->buscarDocumento();

//Conexion
include "../modelo/clconexion.php";
$conexion = new Conexions();
$datos3 = $conexion->buscarConexion();

//Empleados
include "../modelo/clempleados.php";
$emplead = new Empleado();
$datos4 = $emplead->buscarEmpleado2();

?>
<div style="background-image: url('../assets/img/fondoA.jpg');">
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles" style="color: #FFF5F4">Sistema de Ventas E Inventario <small>Gestionar Productos</small></h1>
            </div>
        </div>
        
    
</div>
        

        
   
</body>
</html>

<?php 
include "Inferior.php"
?>
