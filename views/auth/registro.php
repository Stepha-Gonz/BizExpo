<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Crea Tu cuenta en BizExpo</p>

    <?php require_once __DIR__.'/../templates/alertas.php' ;?>
    <form action="/registro" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="formulario__input" placeholder="Ingresa tu Nombre" value= <?php echo $usuario->nombre ;?>>
        </div>
        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="formulario__input" placeholder="Ingresa tu apellido" value= <?php echo $usuario->apellido ;?>>
        </div>
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="Ingresa tu Email" value= <?php echo $usuario->email ;?>>
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Contraseña</label>
            <input type="password" name="password" id="password" class="formulario__input" placeholder="Ingresa tu contraseña">
        </div>
        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Confirma tu Contraseña</label>
            <input type="password" name="password2" id="password2" class="formulario__input" placeholder="Confirma tu contraseña">
        </div>
        <input type="submit" value="Crear Cuenta" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya creaste tu cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu contraseña? Resetear Contraseña</a>
    </div>
</main>