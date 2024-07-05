<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">
            <?php if (isAuth()) { ?>
                <a href="<?php echo isAdmin() ? '/admin/dashboard' : '/finalizar-registro'; ?>" class="header__enlace">Administrar</a>
                <form action="/logout" class="header__form" method="POST">
                    <input type="submit" value="Logout" class="header__submit">
                </form>

            <?php } else { ?>
                <a href=" /login" class="header__enlace">Iniciar Sesión</a>
                <a href="/registro" class="header__enlace">Regístrate</a>
            <?php } ?>
        </nav>

        <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">
                    BizExpo
                </h1>
            </a>

            <p class="header__texto">Noviembre 16 & 17 - 2024</p>
            <p class="header__texto header__texto--modalidad">Conferencias virtuales & presenciales</p>
            <a href="/registro" class="header__boton">Comprar Entradas</a>
        </div>
    </div>
</header>

<div class="barra">
    <div class="barra__contenido">
        <a href="/" class="barra__logo">
            <h2>BizExpo</h2>
        </a>
        <nav class="navegacion">
            <a href="/bizexpo" class="navegacion__enlace <?php echo pagina_actual('/bizexpo') ? 'navegacion__enlace--actual' : ''; ?>">Evento</a>
            <a href="/paquetes" class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Paquetes</a>
            <a href="/workshops-conferencias" class="navegacion__enlace <?php echo pagina_actual('/workshops-conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Workshops/Conferencias</a>
            <a href="/registro" class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Comprar Entradas</a>
        </nav>
    </div>
</div>