<?php
session_start();
require_once __DIR__ . '/database/db.php';
require_once __DIR__ . '/controller/ControladorTicket.php';

$modelo = new ModeloTicket($pdo);
$controlador = new ControladorTicket($modelo);
$datos = $controlador->manejarSolicitud();
$exito = $_SESSION['exito'] ?? '';
if ($exito) {
    unset($_SESSION['exito']);
}
$errores = $datos['errores'];
$datosFormulario = $datos['datosFormulario'];
$incidencias = $datos['incidencias'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa de ayuda - Gestión de incidencias</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="page">
        <?php require_once __DIR__ . '/view/header.php'; ?>
        <?php require_once __DIR__ . '/view/form.php'; ?>
        <?php require_once __DIR__ . '/view/tickets.php'; ?>
    </div>
</body>
</html>
