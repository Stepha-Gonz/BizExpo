<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Recupera tu accesso a BizExpo</p>
    <?php require_once __DIR__ . '/../templates/alertas.php' ;?>    

    <form action="/olvide" method="POST" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" name="email" id="email" class="formulario__input" placeholder="Ingresa tu Email">
        </div>
        
        <input type="submit" value="Recuperar Contraseña" class="formulario__submit">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya creaste tu cuenta? Iniciar Sesión</a>
    <a href="/registro" class="acciones__enlace">¿Aún no has creado tu cuenta? Crear una</a>
    </div>
</main>