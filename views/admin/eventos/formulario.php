<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información del Evento</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre del Evento</label>
        <input type="text" id="nombre" class="formulario__input" name="nombre" placeholder=" Nombre del Evento" value="<?php echo $evento->nombre ?? ''; ?>">
    </div>
    <div class="formulario__campo">
        <label for="descripcion" class="formulario__label">Descripcion del Evento</label>
        <textarea id="descripcion" class="formulario__input" name="descripcion" placeholder=" Descripcion del Evento" rows="8"><?php echo $evento->descripcion ?? ''; ?> </textarea>
    </div>
    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Tipo de Evento</label>
        <select class="formulario__select" id="categoria" name="categoria_id">
            <option value=""> --Seleccionar--</option>
            <?php foreach ($categorias as $categoria) { ?>
                <option <?php echo ($evento->categoria_id === $categoria->id) ? 'selected' : ''; ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="formulario__campo">
        <label for="categoria" class="formulario__label">Selecciona el Día</label>
        <div class="formulario__radio">
            <?php foreach ($dias as $dia) {; ?>
                <div>
                    <label for="<?php echo strtolower($dia->nombre); ?>"><?php echo $dia->nombre; ?></label>
                    <input type="radio" name="dia" id="<?php echo strtolower($dia->nombre); ?>" value="<?php echo $dia->id; ?>" <?php echo ($evento->dia_id === $dia->id) ? 'checked' : ''; ?> />
                </div>
            <?php } ?>
        </div>
        <input type="hidden" name="dia_id" value="<?php echo $evento->dia_id; ?>">
    </div>
    <div id="horas" class="formulario__campo">
        <label for="" class="formulario__label">Seleccionar Hora</label>

        <ul id="#horas" class="horas">
            <?php foreach ($horas as $hora) { ?>
                <li data-hora-id="<?php echo $hora->id; ?>" class="horas__hora horas__hora--deshabilitado"><?php echo $hora->hora; ?></li>
            <?php } ?>
        </ul>
        <input type="hidden" name="hora_id" value="<?php echo $evento->hora_id; ?>">
    </div>
</fieldset>
<fieldset class="formulario__fieldset">
    <legend class="formulario__legen">Información Extra</legend>
    <div class="formulario__campo">
        <label for="ponentes" class="formulario__label">Ponente</label>
        <input type="text" placeholder="--Buscar Ponente--" id="ponentes" class="formulario__input">
        <ul class="listado-ponentes" id="listado-ponentes"></ul>
        <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id; ?>">
    </div>
    <div class="formulario__campo">
        <label for="disponibles" class="formulario__label">Lugares Disponibles</label>
        <input type="number" min="1" placeholder="Ej. 20" id="disponibles" name="disponibles" class="formulario__input" value="<?php echo $evento->disponibles ?? ''; ?>">
    </div>

</fieldset>