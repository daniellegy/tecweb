<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
    //AQUI VA MI CÓDIGO PHP
    $_myvar;
    $_7var;
    //myvar;       // Inválida
    $myvar;
    $var7;
    $_element1;
    //$house*5;     // Invalida
    
    echo '<h4>Respuesta:</h4>';

    echo '<ul>';
    echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
    echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
    echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
    echo '<li>$myvar es válida porque inicia con una letra.</li>';
    echo '<li>$var7 es válida porque inicia con una letra.</li>';
    echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
    echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
    echo '</ul>';
    ?>

    <h2>Ejercicio 2</h2>
    <?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;

    echo "<h4>Valores iniciales:</h4>";
    echo "<p>\$a = $a</p>";
    echo "<p>\$b = $b</p>";
    echo "<p>\$c = $c</p>";

    $a = "PHP server";
    $b = &$a;

    echo "<h4>Valores después de las nuevas asignaciones:</h4>";
    echo "<p>\$a = $a</p>";
    echo "<p>\$b = $b</p>";
    echo "<p>\$c = $c</p>";

    echo "<h4>Descripción:</h4>";
    echo "<p>En el segundo bloque de asignaciones:</p>";
    echo "<ul>";
    echo "<li>Se cambió el valor de \$a a 'PHP server'.</li>";
    echo "<li>Se hizo que \$b sea una referencia a \$a, por lo que \$b también cambió a 'PHP server'.</li>";
    echo "<li>La variable \$c, que era una referencia a \$a, también refleja el nuevo valor de \$a, que es 'PHP server'.</li>";
    echo "</ul>";
    ?>

    <h2>Ejercicio 3</h2>
    <?php
    echo "<h3>Proceso de asignaciones:</h3>";

    $a = "PHP5";
    echo "<h4>1. Después de \$a = \"PHP5\":</h4>";
    echo "<pre>\$a = " . htmlspecialchars(var_export($a, true)) . " (" . gettype($a) . ")</pre>";

    $z[] = &$a;
    echo "<h4>2. Después de \$z[] = &\$a:</h4>";
    echo "<pre>\$z = " . htmlspecialchars(print_r($z, true)) . "</pre>";

    $b = "5a version de PHP";
    echo "<h4>3. Después de \$b = \"5a version de PHP\":</h4>";
    echo "<pre>\$b = " . htmlspecialchars(var_export($b, true)) . " (" . gettype($b) . ")</pre>";

    $c = $b * 10;
    echo "<h4>4. Después de \$c = \$b * 10:</h4>";
    echo "<pre>\$c = " . htmlspecialchars(var_export($c, true)) . " (" . gettype($c) . ")</pre>";

    $a .= $b;
    echo "<h4>5. Después de \$a .= \$b:</h4>";
    echo "<pre>\$a = " . htmlspecialchars(var_export($a, true)) . " (" . gettype($a) . ")</pre>";

    $b *= $c;
    echo "<h4>6. Después de \$b *= \$c:</h4>";
    echo "<pre>\$b = " . htmlspecialchars(var_export($b, true)) . " (" . gettype($b) . ")</pre>";

    $z[0] = "MySQL";
    echo "<h4>7. Después de \$z[0] = \"MySQL\":</h4>";
    echo "<pre>Array modificado: \$z = " . htmlspecialchars(print_r($z, true)) . "</pre>";
    echo "<pre>Variable referenciada: \$a = " . htmlspecialchars(var_export($a, true)) . " (" . gettype($a) . ")</pre>";
    ?>
    <h2>Ejercicio 4</h2>
    <?php
    echo "<h3>Valores de las variables usando \$GLOBALS:</h3>";

    // Mostrar valores usando $GLOBALS
    echo "<p>Valor de \$a:</p>";
    echo "<pre>\$a = " . htmlspecialchars(var_export($GLOBALS['a'], true)) . " (" . gettype($GLOBALS['a']) . ")</pre>";

    echo "<p>Valor de \$b:</p>";
    echo "<pre>\$b = " . htmlspecialchars(var_export($GLOBALS['b'], true)) . " (" . gettype($GLOBALS['b']) . ")</pre>";

    echo "<p>Valor de \$c:</p>";
    echo "<pre>\$c = " . htmlspecialchars(var_export($GLOBALS['c'], true)) . " (" . gettype($GLOBALS['c']) . ")</pre>";

    echo "<p>Valor de \$z:</p>";
    echo "<pre>\$z = " . htmlspecialchars(print_r($GLOBALS['z'], true)) . "</pre>";
    ?>


</body>

</html>