<?php

    require "../../includes/app.php"; 

    use App\Propiedad;
    use Intervention\Image\ImageManagerStatic as Image;

    estaAutenticado();


    // Validar la URL por ID valido
    $id = $_GET["id"];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header("Location: /admin");
    }

    // Base de datos

    $db = conectarDB();

    // Obtener los datos de la propiedad
    $propiedad = Propiedad::find($id);


    // Consultar para obtener los vendedores 
    $consulta = "SELECT * from vendedores";
    $resultado = mysqli_query($db,$consulta);



    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();


    // Ejecutar el codigo despues de que el usuario envia el formulario 
    if($_SERVER["REQUEST_METHOD"] === 'POST') {


        // Asignar los atributos
        $args = $_POST["propiedad"];


        $propiedad->sincronizar($args);

        // Validacion
        $errores = $propiedad->validar();

        // Subida de archivos
        // Generar un nombre unico
        $nombreImagen = md5( uniqid( rand(),true ) ) . ".jpg";

        if($_FILES["propiedad"]["tmp_name"]["imagen"]) {
            $image = Image::make($_FILES["propiedad"]["tmp_name"]["imagen"])->fit(800,600);
            $propiedad->setImagen($nombreImagen);

        }

        if (empty($errores)) {
            // Almacenar la imagen
            if ($_FILES['propiedad']['tmp_name']['imagen']){
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }
            $propiedad->guardar();
        }

    }



    incluirTemplate("header");
?>

    <main class="contenedor">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error) { ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>      
        <?php }?>

        <form class="formulario" method="POST" enctype="multipart/form-data">

            <?php  include '../../includes/templates/formulario_propiedades.php' ?>

            <input type="submit" value="Actualizar Propiedad" class="boton boton-amarillo">

        </form>
    </main>

<?php
    incluirTemplate("footer");
?>