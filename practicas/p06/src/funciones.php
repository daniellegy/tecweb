<?php
function esMultiploDe5y7($num) {
    if ($num % 5 == 0 && $num % 7 == 0) {
        echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
    } else {
        echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
    }
}

function generarSecuenciaImparParImpar() {
    $secuencias = [];
    $iteraciones = 0;

    while (count($secuencias) < 4) {
        $iteraciones++;
        
        $num1 = rand(100, 999);
        $num2 = rand(100, 999);
        $num3 = rand(100, 999);

        if ($num1 % 2 !== 0 && $num2 % 2 === 0 && $num3 % 2 !== 0) {
            $secuencias[] = [$num1, $num2, $num3];
        }
    }

    echo "Secuencias generadas:<br><br>";
    foreach ($secuencias as $fila) {
        echo implode(", ", $fila) . "<br>";
    }
    echo "<br>" . ($iteraciones * 3) . " números obtenidos en " . $iteraciones . " iteraciones\n";

    return [
        "secuencias" => $secuencias,
        "iteraciones" => $iteraciones,
        "totalNumeros" => $iteraciones * 3
    ];
}

function encontrarMultiploConWhile($numeroDado)
{
    $iteraciones = 0;
    $numeroAleatorio = 0;

    while (true) {
        $iteraciones++;
        $numeroAleatorio = rand(1, 1000);

        if ($numeroAleatorio % $numeroDado === 0) {
            break;
        }
    }

    echo "Número aleatorio múltiplo de $numeroDado encontrado: $numeroAleatorio\n";
    echo "Iteraciones necesarias: $iteraciones\n";
}

function tablaABC(){$arreglo = [];
    for ($i = 97; $i <= 122; $i++) {
        $arreglo[$i] = chr($i);
    }
    
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <title>Tabla de Letras</title>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                margin: 20px auto;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h2 style='text-align: center;'>Tabla de Letras (ASCII 97-122)</h2>
        <table>
            <tr>
                <th>Código ASCII</th>
                <th>Letra</th>
            </tr>";
    
    foreach ($arreglo as $key => $value) {
        echo "<tr>
                <td>$key</td>
                <td>$value</td>
              </tr>";
    }
    
    echo "</table>
    </body>
    </html>";}
?>