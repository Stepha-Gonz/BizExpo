<main class="pagina">
    <h2 class="pagina__heading"><?php echo $titulo; ?></h2>
    <p class="pagina__descripcion">Tu Boleto - Te recomendamos almacenarlo</p>
    <div class="boleto-virtual">
        <div class="boletos__grid">
            <div class="boleto boleto--<?php echo strtolower($registro->paquete->nombre); ?> boleto--acceso">
                <h4 class="boleto__logo">BizExpo</h4>
                <p class="boleto__plan">Pase : <?php echo ($registro->paquete->nombre); ?></p>
                <p class="boleto__precio"><?php echo ($registro->usuario->nombre) . " " . ($registro->usuario->apellido); ?></p>
                <p class="boleto__codigo"><?php echo '#' . ' ' . $registro->token; ?></p>
            </div>

        </div>

    </div>
</main>