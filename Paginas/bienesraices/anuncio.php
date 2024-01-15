<?php
    include './includes/templates/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source src="build/img/destacada.webp" type="image/webp">
            <source src="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultrices neque sed libero varius consequat. Integer odio augue, ornare eu sem sit amet, fermentum viverra nulla. Suspendisse tellus nunc, pharetra ut lacinia ut, maximus eget turpis. Cras tortor tellus, ornare eget vulputate ac, accumsan quis dui. Duis vel neque at turpis imperdiet pretium at non erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a consequat odio. Praesent vestibulum vulputate libero.
            Suspendisse potenti. Sed sollicitudin, nulla in ullamcorper euismod, quam ipsum facilisis elit, a elementum enim augue eu arcu. Nunc tempus dapibus eros, vitae consequat.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pharetra odio eu tortor ullamcorper scelerisque. Curabitur iaculis ultrices tellus, id interdum ipsum auctor ut. Quisque varius eget ipsum sed dapibus. Mauris congue augue vel posuere iaculis. Etiam vel lacus rutrum, maximus nibh vitae, convallis ante. Ut ut bibendum.</p>
        </div>
    </main>

<?php
    include './includes/templates/footer.php';
?>