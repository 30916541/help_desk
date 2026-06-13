<section class="card">
    <h2>Tickets Registrados</h2>
    <?php if (empty($incidencias)): ?>
        <p>No hay tickets registrados actualmente.</p>
    <?php else: ?>
        <div class="tickets">
            <?php foreach ($incidencias as $incidencia): ?>
                <article class="ticket">
                    <div class="ticket-header">
                        <strong><?php echo htmlspecialchars($incidencia['asunto']); ?></strong>
                        <span class="ticket-status"><?php echo htmlspecialchars($incidencia['estatus']); ?></span>
                    </div>
                    <p class="ticket-meta">Creado por <?php echo htmlspecialchars($incidencia['usuario']); ?> · <span class="small"><?php echo htmlspecialchars($incidencia['fecha_creacion']); ?></span></p>
                    <div class="ticket-message"><?php echo nl2br(htmlspecialchars($incidencia['mensaje'])); ?></div>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
