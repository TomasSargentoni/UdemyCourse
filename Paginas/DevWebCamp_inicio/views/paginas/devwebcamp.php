<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de Latinoamerica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebcamp">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p class="devwebcamp__texto">Mauris at erat metus. Pellentesque odio nisl, suscipit eget nisl ut, hendrerit fringilla tortor. Ut fermentum, odio iaculis varius ornare, augue enim cursus magna, ut efficitur quam risus non eros. Cras sed magna nisi. Pellentesque erat dolor, pretium ac est ac, ornare mattis nulla. Nullam eget ante id nunc hendrerit placerat.</p>
            <p class="devwebcamp__texto">Mauris at erat metus. Pellentesque odio nisl, suscipit eget nisl ut, hendrerit fringilla tortor. Ut fermentum, odio iaculis varius ornare, augue enim cursus magna, ut efficitur quam risus non eros. Cras sed magna nisi. Pellentesque erat dolor, pretium ac est ac, ornare mattis nulla. Nullam eget ante id nunc hendrerit placerat.</p>
        </div>
    </div>
</main>