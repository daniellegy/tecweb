<?php
header("Content-Type: application/xhtml+xml; charset=UTF-8");

$edad = isset($_POST['edad']) ? (int)$_POST['edad'] : 0;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resultado de Validación</title>
</head>
<body>
  <h2>Resultado del Formulario</h2>
  <?php if ($sexo === "femenino" && $edad >= 18 && $edad <= 35): ?>
    <p><strong>Bienvenida</strong>, usted está en el rango de edad permitido.</p>
  <?php else: ?>
    <p><strong>Error</strong>, no cumple con los criterios de edad y sexo.</p>
  <?php endif; ?>
</body>
</html>
