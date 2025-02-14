<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<?php
    header("Content-Type: application/json; charset=utf-8"); 
    $data = array();

	if(isset($_GET['tope']))
    {
		$tope = $_GET['tope'];
    }
    else
    {
        die('Parámetro "tope" no detectado...');
    }

	if (!empty($tope))
	{
		/** SE CREA EL OBJETO DE CONEXION */
		@$link = new mysqli('localhost', 'root', '1234', 'marketzone');
        /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */

		/** comprobar la conexión */
		if ($link->connect_errno) 
		{
			die('Falló la conexión: '.$link->connect_error.'<br/>');
			//exit();
		}

		/** Crear una tabla que no devuelve un conjunto de resultados */
		if ( $result = $link->query("SELECT * FROM productos WHERE unidades <= $tope") ) 
		{
            /** Se extraen las tuplas obtenidas de la consulta */
			$row = $result->fetch_all(MYSQLI_ASSOC);

            /** Se crea un arreglo con la estructura deseada */
            foreach($row as $num => $registro) {            // Se recorren tuplas
                foreach($registro as $key => $value) {      // Se recorren campos
                    $data[$num][$key] = $value;
                }
            }

			/** útil para liberar memoria asociada a un resultado con demasiada información */
			$result->free();
		}

		$link->close();
	}
	?>
	<head>
		<meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
		<title>Producto</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
    <h3>PRODUCTOS</h3>
    <br />
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Unidades</th>
                <th>Detalles</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($data)) : ?>
            <?php foreach ($data as $index => $producto) : ?>
                <tr>
                    <td><?= htmlspecialchars($index + 1) ?></td>
                    <td><?= htmlspecialchars($producto['nombre']) ?></td>
                    <td><?= htmlspecialchars($producto['marca']) ?></td>
                    <td><?= htmlspecialchars($producto['modelo']) ?></td>
                    <td><?= htmlspecialchars($producto['precio']) ?></td>
                    <td><?= htmlspecialchars($producto['unidades']) ?></td>
                    <td><?= htmlspecialchars($producto['detalles']) ?></td>
                    <td><img src="<?= htmlspecialchars($producto['imagen']) ?>" alt="Imagen de <?= htmlspecialchars($producto['nombre']) ?>" width="50" /></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="8">No hay productos con unidades menores o iguales a <?= htmlspecialchars($tope) ?></td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</body>
</html>