<?php
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
?>