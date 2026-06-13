<?php

class ModeloTicket
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function crearTicket(string $usuario, string $asunto, string $mensaje): bool
    {
        $sql = 'INSERT INTO tickets (usuario, asunto, mensaje) VALUES (:usuario, :asunto, :mensaje)';
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':usuario' => $usuario,
            ':asunto' => $asunto,
            ':mensaje' => $mensaje,
        ]);
    }

    public function obtenerTickets(): array
    {
        $stmt = $this->pdo->query('SELECT id, usuario, asunto, mensaje, estatus, fecha_creacion FROM tickets ORDER BY fecha_creacion DESC');
        return $stmt->fetchAll();
    }
}
