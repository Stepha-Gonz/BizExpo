<h2 class="pagina__heading"><?php echo $titulo; ?></h2>
<p class="pagina__descripcion">Elige los eventos a los cuales asistiras </p>


<div class="eventos-registro">

    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__heading--conferencias">&lt;Conferencias/></h3>
        <h3 class="eventos-registro__fecha">Sábado 16 de Noviembre </h3>
        <div class="eventos-registro__grid">
            <?php foreach ($eventos['conferencias_s'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>
        <h3 class="eventos-registro__fecha">Domingo 17 de Noviembre </h3>
        <div class="eventos-registro__grid">
            <?php foreach ($eventos['conferencias_d'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>
        <h3 class="eventos-registro__heading--workshops">&lt;Workshops/Talleres/></h3>
        <h3 class="eventos-registro__fecha">Sábado 16 de Noviembre </h3>
        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach ($eventos['workshops_s'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>
        <h3 class="eventos-registro__fecha">Domingo 17 de Noviembre </h3>
        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach ($eventos['workshops_d'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>
    </main>
    <aside class="registro">
        <h2 class="registro__heading">Tu Registro</h2>

        <div class="registro__regalo">
            <label for="regalo" class="registro__label">Selecciona un Regalo</label>
            <select class="registro__select" id="regalo">
                <option value="">-- Selecciona tu Regalo--</option>
                <?php foreach ($regalos as $regalo) { ?>
                    <option value="<?php echo $regalo->id; ?>"><?php echo $regalo->nombre; ?></option>
                <?php } ?>
            </select>
        </div>
        <div id="registro-resumen" class="registro__resumen"></div>

        <form action="" id="registro" class="formulario">
            <div class="formulario__campo">
                <input type="submit" value="Registrarme" class="formulario__submit formulario__submit--full">
            </div>
        </form>

    </aside>

</div>