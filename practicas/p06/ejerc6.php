<?php
header("Content-Type: application/xhtml+xml; charset=UTF-8");

$parqueVehicular = [
    "ABC1234" => ["Auto" => ["marca" => "HONDA", "modelo" => 2020, "tipo" => "camioneta"], "Propietario" => ["nombre" => "Alfonzo Esparza", "ciudad" => "Puebla, Pue.", "direccion" => "C.U., Jardines de San Manuel"]],
    "XYZ5678" => ["Auto" => ["marca" => "MAZDA", "modelo" => 2019, "tipo" => "sedan"], "Propietario" => ["nombre" => "Consuelo Molina", "ciudad" => "Puebla, Pue.", "direccion" => "97 oriente"]],
    "LMN3456" => ["Auto" => ["marca" => "TOYOTA", "modelo" => 2021, "tipo" => "hatchback"], "Propietario" => ["nombre" => "Juan Pérez", "ciudad" => "Tlaxcala", "direccion" => "Centro histórico"]],
    "JKL9876" => ["Auto" => ["marca" => "FORD", "modelo" => 2022, "tipo" => "camioneta"], "Propietario" => ["nombre" => "Ana López", "ciudad" => "Cholula", "direccion" => "Avenida Universidad"]],
    "DEF2345" => ["Auto" => ["marca" => "NISSAN", "modelo" => 2020, "tipo" => "sedan"], "Propietario" => ["nombre" => "Luis Fernández", "ciudad" => "Atlixco", "direccion" => "Calle Primavera"]],
    "PQR7890" => ["Auto" => ["marca" => "CHEVROLET", "modelo" => 2018, "tipo" => "camioneta"], "Propietario" => ["nombre" => "María González", "ciudad" => "Tehuacán", "direccion" => "Colonia Centro"]],
    "TUV1122" => ["Auto" => ["marca" => "VOLKSWAGEN", "modelo" => 2021, "tipo" => "hatchback"], "Propietario" => ["nombre" => "Carlos Herrera", "ciudad" => "Puebla, Pue.", "direccion" => "Lomas del Ángel"]],
    "GHJ3345" => ["Auto" => ["marca" => "KIA", "modelo" => 2019, "tipo" => "sedan"], "Propietario" => ["nombre" => "Isabel Martínez", "ciudad" => "San Martín", "direccion" => "Parque Industrial"]],
    "OPL5566" => ["Auto" => ["marca" => "PEUGEOT", "modelo" => 2020, "tipo" => "camioneta"], "Propietario" => ["nombre" => "Pedro Sánchez", "ciudad" => "Puebla, Pue.", "direccion" => "Avenida Juárez"]],
    "QWE7788" => ["Auto" => ["marca" => "RENAULT", "modelo" => 2022, "tipo" => "hatchback"], "Propietario" => ["nombre" => "Fernanda Reyes", "ciudad" => "Cholula", "direccion" => "Camino Real"]],
    "RTY8899" => ["Auto" => ["marca" => "FIAT", "modelo" => 2017, "tipo" => "sedan"], "Propietario" => ["nombre" => "Guillermo Ramírez", "ciudad" => "Atlixco", "direccion" => "Calle Jardín"]],
    "UUI2233" => ["Auto" => ["marca" => "BMW", "modelo" => 2021, "tipo" => "camioneta"], "Propietario" => ["nombre" => "Laura Gutiérrez", "ciudad" => "Tehuacán", "direccion" => "Boulevard Sur"]],
    "ASD3344" => ["Auto" => ["marca" => "AUDI", "modelo" => 2020, "tipo" => "sedan"], "Propietario" => ["nombre" => "Rodrigo Moreno", "ciudad" => "Puebla, Pue.", "direccion" => "Centro histórico"]],
    "FGH5566" => ["Auto" => ["marca" => "MERCEDES", "modelo" => 2021, "tipo" => "camioneta"], "Propietario" => ["nombre" => "Diana Flores", "ciudad" => "San Martín", "direccion" => "Calle Independencia"]],
    "HJK6677" => ["Auto" => ["marca" => "HYUNDAI", "modelo" => 2019, "tipo" => "hatchback"], "Propietario" => ["nombre" => "Luis González", "ciudad" => "Puebla, Pue.", "direccion" => "Lomas del Sol"]],
];

echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resultado de Consulta</title>
</head>
<body>
  <h2>Resultado del Parque Vehicular</h2>
  <?php
  if (isset($_POST['matricula']) && !empty($_POST['matricula'])) {
      $matricula = strtoupper(trim($_POST['matricula']));
      if (isset($parqueVehicular[$matricula])) {
          echo "<h3>Información del Vehículo:</h3>";
          echo "<pre>" . print_r($parqueVehicular[$matricula], true) . "</pre>";
      } else {
          echo "<p>No se encontró un vehículo con la matrícula: $matricula</p>";
      }
  } elseif (isset($_POST['mostrar_todo'])) {
      echo "<h3>Listado de Todo el Parque Vehicular:</h3>";
      echo "<pre>" . print_r($parqueVehicular, true) . "</pre>";
  } else {
      echo "<p>No se ha realizado ninguna consulta.</p>";
  }
  ?>
</body>
</html>
