<?php
$conexion = mysqli_connect("localhost", "tu_usuario_db", "tu_contraseña_db", "usuarios");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

$consulta = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";

if (mysqli_query($conexion, $consulta)) {
    echo "Registro exitoso. Puedes <a href='login.html'>iniciar sesión</a>.";
} else {
    echo "Error en el registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
<?php
session_start();
$conexion = mysqli_connect("localhost", "tu_usuario_db", "tu_contraseña_db", "usuarios");

$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$consulta = "SELECT id, nombre, contraseña FROM usuarios WHERE correo = '$correo'";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_assoc($resultado);

if (password_verify($contraseña, $fila["contraseña"])) {
    $_SESSION["id"] = $fila["id"];
    $_SESSION["nombre"] = $fila["nombre"];
    header("Location: perfil.php"); // Redirigir al perfil del usuario
} else {
    echo "Inicio de sesión fallido. <a href='login.html'>Volver a intentar</a>.";
}

mysqli_close($conexion);
?>
<?php
session_start();
session_destroy();
header("Location: login.html"); // Redirigir al inicio de sesión
?>
