<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Final Programación en PHP POO</title>

    <link href="../css.css" rel="stylesheet" type="text/css" media="only screen and (min-width:1025px)" />
   
</head>
<body>
   

    <h1>
        <img id="h1" src="../imag/titulo.png">
    </h1>

    <nav>
        <ul id="menu">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="conversiones.php">Conversiones</a></li>
            <li><a href="#">Matemáticas</a>
                <ul class="hidden">
                    <li><a href="serie.php">Serie Fibonacci</a></li>
                    <li><a href="factoriales.php">Obtener Factorial</a></li>
                    <li><a href="comparacion.php">Mayor y menor</a></li>
                </ul>
            </li>
                       
    </ul>
    </nav>

    <section>
        <div id="caja1"></div>
        <div id="formulario">
            <h2><img id="h2" src="../img/titulo21.png"></h2>
            <form name="form1" method="POST" action="calcularComparar.php">

                <p>Ingresa el primer número </p>
                <p><input type="text" name="txtnumero1" id="txtnumero1"></p>
                <p>Ingresa el segundo número </p>
                <p><input type="text" name="txtnumero2" id="txtnumero2"></p>
                <p>Ingresa el tercer número </p>
                <p><input type="text" name="txtnumero3" id="txtnumero3"></p>
                <p><input type="submit" name="btncomparar" value="Comparar"></p>
        
            </form>
        </div>
    </section>

    <footer>
        <img id="footer" src="../imag/footer.png">     
    </footer>
</body>
</html>