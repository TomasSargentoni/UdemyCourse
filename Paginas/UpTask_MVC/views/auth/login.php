<div class="contenedor login">
    <?php include_once __DIR__ . "/../templates/nombre-sitio.php"; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesion</p>

        <?php include_once __DIR__ . "/../templates/alertas.php"; ?>

        <?php 
            $exito = $_GET["exito"] ?? null;
            if ($exito === "1"){ ?>
                <div class="alerta exito"><?php echo "Contraseña modificada exitosamente"; ?></div>
            <?php } ?>
            

        <form class="formulario" method="POST" action="/" novalidate>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Tu Email" name="email">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Tu Password" name="password">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesion">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aun no tienes una cuenta? obtener una</a>
            <a href="/olvide">¿Olvidaste tu Password?</a>
        </div>
    </div> <!-- .Contenedor-sm -->
</div>