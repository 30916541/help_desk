<?php
$datosFormulario = $datosFormulario ?? [
    'usuario' => '',
    'asunto' => '',
    'mensaje' => '',
];
?>
<section class="card">
    <h2>Nuevo ticket</h2>
    <div class="alerts">
        <?php if (!empty($exito)): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($exito); ?></div>
        <?php endif; ?>
        <?php if (!empty($errores)): ?>
            <div class="alert alert-error">
                <ul style="margin:0; padding-left:20px;">
                    <?php foreach ($errores as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <form method="POST" novalidate>
        <div class="form-row">
            <div class="form-field">
                <label for="usuario">Nombre o Correo</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu nombre o correo" value="<?php echo htmlspecialchars($datosFormulario['usuario']); ?>" required>
            </div>

            <div class="form-field">
                <label for="asunto">Asunto</label>
                <input type="text" id="asunto" name="asunto" placeholder="Asunto del problema" value="<?php echo htmlspecialchars($datosFormulario['asunto']); ?>" required>
            </div>
        </div>

        <label for="mensaje">Descripción</label>
        <textarea id="mensaje" name="mensaje" rows="5" placeholder="Describe detalladamente la incidencia" required><?php echo htmlspecialchars($datosFormulario['mensaje']); ?></textarea>

        <button type="submit">Enviar Solicitud</button>
    </form>
</section>
