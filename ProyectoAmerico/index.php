<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema VeI Americo-Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <!---------------CABECERAS---------------->
    <div class="barraNav"> <!--No se usa todavia la class--->
        <header class="cabeceraMy">
        <nav class="cabecera1">
            <h2>SISTEMA DE VENTA E INVENTARIO</h2>
        </nav>
        </header>
        <header class="cabeceraMn">
        <nav class="cabecera2">
            <h3>Inicio Session</h3>
        </nav>
        </header>
    </div>
    <!-------------------RecuadroLogin---------------->
    <br>
    <div class="contenedor-form">
        
        <div class="formLogin">
            <img src="imagenes/logo.JPG">
            <form action="controlador/validarLogin.php">
                <img class="iconologo" src="imagenes/usuario.png">
                Usuario: <input type="text" placeholder="Usuario" name="usuario" required>
                <br>
                <br>
                <img class="iconologo" src="imagenes/contraseña.png">
                Contraseña: <input type="password" placeholder="Contraseña" name="clave" required>
                <br>
                <br>
                <input type="submit" value="Ingresar">
             </form>
        </div>
    </div>
    
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/mains.js"></script>

</body>
</html>