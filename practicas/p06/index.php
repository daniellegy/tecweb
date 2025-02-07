<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 6</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        include("src/funciones.php");
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            esMultiploDe5y7($num);
        }
    ?>

    <h2>Ejercicio 2</h2>
    <?php
      generarSecuenciaImparParImpar();
    ?>

    <h2>Ejercicio 3</h2>
    <?php
    if (!isset($_GET['numero']) || !is_numeric($_GET['numero'])) {
        die("Por favor, proporciona un número válido en la URL, por ejemplo: ?numero=7");
    }
    $numeroDado = (int) $_GET['numero'];
    
    encontrarMultiploConWhile($numeroDado);
    ?>

    <h2>Ejercicio 4</h2>
    <?php
    tablaABC();
    ?>


    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>

    
</body>
</html>