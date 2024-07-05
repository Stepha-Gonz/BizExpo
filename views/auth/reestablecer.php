<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Ingresa tu nueva contraseña</p>

    <?php require_once __DIR__ . '/../templates/alertas.php' ;?>   

    <?php if($token_valido) { ?>
        <form method="POST" class="formulario">
            
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Password</label>
                <input type="password" name="password" id="password" class="formulario__input" placeholder="Ingresa tu contraseña">
            </div>
            <div class="formulario__campo">
                <label for="password2" class="formulario__label">Confirma tu Contraseña</label>
                <input type="password" name="password2" id="password2" class="formulario__input" placeholder="Confirma tu contraseña">
            </div>
            <input type="submit" value="Guardar contraseña" class="formulario__submit">
        </form>
    <?php }?>

    
</main>