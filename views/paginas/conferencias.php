<main class="agenda">
    <h2 class="agenda__heading">Workshops & Conferencias</h2>
    <p class="agenda__descripcion">Talleres y conferencias dictados por expertos en el tema de la tecnología </p>
    <div class="eventos">
        <h3 class="eventos__heading">
            &lt; Conferencias/>
        </h3>
        <p class="eventos__fecha">Sábado 16 de Noviembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['conferencias_s'] as $evento) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div>
        </div>
        <p class="eventos__fecha">Domingo 17 de Noviembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['conferencias_d'] as $evento) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <div class="eventos eventos--workshops">
        <h3 class="eventos__heading">
            &lt; Workshops/>
        </h3>
        <p class="eventos__fecha">Sábado 16 de Noviembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['workshops_s'] as $evento) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div>
        </div>
        <p class="eventos__fecha">Domingo 17 de Noviembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['workshops_d'] as $evento) { ?>
                    <?php include __DIR__ . '../../templates/evento.php'; ?>
                <?php } ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</main>