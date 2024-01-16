<?php
    require "includes/funciones.php";
    incluirTemplate("header");
?>

    <main class="contenedor">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source src="build/nosotros.webp" type="image/webp">
                    <source src="build/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices neque sed libero varius consequat. Integer odio augue, ornare eu sem sit amet, fermentum viverra nulla. Suspendisse tellus nunc, pharetra ut lacinia ut, maximus eget turpis. Cras tortor tellus, ornare eget vulputate ac, accumsan quis dui. Duis vel neque at turpis imperdiet pretium at non erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a consequat odio. Praesent vestibulum vulputate libero.
                Suspendisse potenti. Sed sollicitudin, nulla in ullamcorper euismod, quam ipsum facilisis elit, a elementum enim augue eu arcu. Nunc tempus dapibus eros, vitae consequat.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pharetra odio eu tortor ullamcorper scelerisque. Curabitur iaculis ultrices tellus, id interdum ipsum auctor ut. Quisque varius eget ipsum sed dapibus. Mauris congue augue vel posuere iaculis. Etiam vel lacus rutrum, maximus nibh vitae, convallis ante. Ut ut bibendum.</p>
            </div>
        </div>
    </main>

    <section class="contenedor">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue justo ut lorem sagittis finibus vel convallis velit. Donec nisi quam, sodales vel pellentesque sit amet, feugiat quis magna. Quisque ipsum risus, placerat.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue justo ut lorem sagittis finibus vel convallis velit. Donec nisi quam, sodales vel pellentesque sit amet, feugiat quis magna. Quisque ipsum risus, placerat.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue justo ut lorem sagittis finibus vel convallis velit. Donec nisi quam, sodales vel pellentesque sit amet, feugiat quis magna. Quisque ipsum risus, placerat.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate("footer");
?>