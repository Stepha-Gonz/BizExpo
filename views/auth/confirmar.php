<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <?php require_once __DIR__ . '/../templates/alertas.php' ;?>

        <?php if (isset($alertas['exito'])){ ?>
        <a href="/login" class="confirmar__boton"> Iniciar Sesión</a>
        <?php } ?>
        
</main>