<?php include_once __DIR__ . '/conferencias.php' ?>;

<section class="resumen">
    <div class="resumen__grid">
        <div data-aos="<?php aos_animacion(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $ponentes_total; ?></p>
            <p class="resumen__texto">Speakers</p>
        </div>
        <div data-aos="<?php aos_animacion(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $conferencias_total; ?></p>
            <p class="resumen__texto">Conferencias</p>
        </div>
        <div data-aos="<?php aos_animacion(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero"><?php echo $workshops_total; ?></p>
            <p class="resumen__texto">Workshops</p>
        </div>
        <div data-aos="<?php aos_animacion(); ?>" class="resumen__bloque">
            <p class="resumen__texto resumen__texto--numero">500</p>
            <p class="resumen__texto">Asistentes</p>
        </div>
    </div>
</section>

<section class="speakers">
    <h2 class="speakers__heading">Speakers</h2>
    <p class="speakers__descripcion">Conoce a los expertos invitados a BizExpo</p>
    <div class="speakers__grid">
        <?php foreach ($ponentes as $ponente) { ?>
            <div data-aos-offset="20" data-aos-once="true" data-aos="<?php aos_animacion(); ?>" class="speaker">
                <picture>
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp">
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                    <img class="speaker__imagen" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="Imagen Ponente">
                </picture>
                <div class="speaker__informacion">
                    <h4 class="speaker__nombre">
                        <?php echo $ponente->nombre . ' ' . $ponente->apellido; ?>
                    </h4>
                    <p class="speaker__ubicacion">
                        <?php echo $ponente->ciudad . ', ' . $ponente->pais; ?>
                    </p>

                    <ul class="speaker__listado-skills">
                        <?php $tags = explode(',', $ponente->tags);
                        foreach ($tags as $tag) { ?>
                            <li class="speaker__skill"><?php echo $tag; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<section class="seccion-mapas">
    <h2 class="mapas__heading">Ubícanos en la ciudad de Bogotá</h2>
    <div class="mapa" id="mapa"></div>
</section>


<section class="boletos">
    <h2 class="boletos__heading">Boletos & precios</h2>
    <p class="boletos__descripcion">Boletos para BizExpo</p>

    <div class="boletos__grid">
        <div class="boleto boleto--presencial">
            <h4 class="boleto__logo">BizExpo</h4>
            <p class="boleto__plan">Presencial</p>
            <p class="boleto__precio">$125 USD</p>
        </div>
        <div class="boleto boleto--virtual">
            <h4 class="boleto__logo">BizExpo</h4>
            <p class="boleto__plan">Virtual</p>
            <p class="boleto__precio">$50 USD</p>
        </div>
        <div class="boleto boleto--gratis">
            <h4 class="boleto__logo">BizExpo</h4>
            <p class="boleto__plan">Presencial</p>
            <p class="boleto__precio">Gratis - $0 USD</p>
        </div>
    </div>
    <div class="boleto__enlace-contenedor">
        <a href="/paquetes" class="boleto__enlace">Ver Paquetes</a>
    </div>
</section>