<?php

require_once __DIR__ . '/../model/ModeloTicket.php';

class ControladorTicket
{
    private ModeloTicket $modelo;

    public function __construct(ModeloTicket $modelo)
    {
        $this->modelo = $modelo;
    }

    public function manejarSolicitud(): array
    {
        $errores = [];
        $datosFormulario = [
            'usuario' => '',
            'asunto' => '',
            'mensaje' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datosFormulario['usuario'] = trim($_POST['usuario'] ?? '');
            $datosFormulario['asunto'] = trim($_POST['asunto'] ?? '');
            $datosFormulario['mensaje'] = trim($_POST['mensaje'] ?? '');

            if ($datosFormulario['usuario'] === '') {
                $errores[] = 'El campo "Nombre o correo" es obligatorio.';
            }
            if ($datosFormulario['asunto'] === '') {
                $errores[] = 'El campo "Asunto" es obligatorio.';
            }
            if ($datosFormulario['mensaje'] === '') {
                $errores[] = 'El campo "Descripción" es obligatorio.';
            }

            if (empty($errores)) {
                if ($this->modelo->crearTicket($datosFormulario['usuario'], $datosFormulario['asunto'], $datosFormulario['mensaje'])) {
                    $_SESSION['exito'] = 'Ticket registrado correctamente.';
                    header('Location: ' . $_SERVER['PHP_SELF']);
                    exit;
                }

                $errores[] = 'Ocurrió un error al guardar el ticket. Por favor intente de nuevo.';
            }
        }

        $incidencias = $this->modelo->obtenerTickets();

        return [
            'errores' => $errores,
            'datosFormulario' => $datosFormulario,
            'incidencias' => $incidencias,
        ];
    }
}
