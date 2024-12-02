<link rel="stylesheet" href="../css/estilo3.css">

<?php
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Resultado del Formulario</title>
</head>
<body>
  <h1>Resultado del Formulario</h1>
  <p>Usuario: <?php echo htmlspecialchars($usuario); ?></p>
  <p>Contraseña: <?php echo htmlspecialchars($contraseña); ?></p>
  <a href="../index.php">Volver al inicio</a>
</body>
<?php
$conexion = new mysqli("localhost", "root", "", "usuarios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$sql = "INSERT INTO contactos (usuario, contraseña) VALUES ('$usuario', '$contraseña')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
</html>