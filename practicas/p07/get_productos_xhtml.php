<?php
    header("Content-Type: application/xhtml+xml; charset=utf-8"); 

    if (!isset($_GET['tope']) || empty($_GET['tope'])) {
        die('<p>Parámetro "tope" no detectado o vacío...</p>');
    }

    $tope = (int) $_GET['tope'];
    $data = [];

    @$link = new mysqli('localhost', 'root', '1234', 'marketzone');
    if ($link->connect_errno) {
        die('<p>Falló la conexión: ' . $link->connect_error . '</p>');
    }

    $stmt = $link->prepare("SELECT * FROM productos WHERE unidades <= ?");
    $stmt->bind_param("i", $tope);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    
    $stmt->close();
    $link->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
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
                    <td><img src="<?= htmlspecialchars($producto['imagen']) ?>" alt="Imagen de <?= htmlspecialchars($producto['nombre']) ?>" width="150" /></td>
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
