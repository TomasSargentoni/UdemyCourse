<?php

    require "../includes/app.php";

    estaAutenticado();

    use App\Propiedad;

    $db = conectarDB();

    // Implementar un metodo para obtener todas las propiedades
    $propiedades = Propiedad::all();

    //Mostrar mensaje condicional
    $resultado = $_GET["resultado"];


    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {

            $propiedad = Propiedad::find($id);

            $propiedad->eliminar();
            
        }
    }

    // Incluye un template
    incluirTemplate("header");
?>

    <main class="contenedor">
        <h1>Administrador de Bienes Raices</h1>
        <?php if($resultado == 1) { ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php }
        else if ($resultado == 2) { ?>
            <p class="alerta exito-amarillo">Anuncio Actualizado Correctamente</p>
        <?php }   
        else if ($resultado == 3) { ?>
            <p class="alerta exito-rojo">Anuncio Eliminado Correctamente</p>
        <?php } ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <Tbody> <!-- Mostrar los resultados -->
                <?php foreach( $propiedades as $propiedad ) { ?>
                <tr>
                    <td> <?php echo $propiedad->id ?></td>
                    <td>  <?php echo $propiedad->titulo ?> </td>
                    <td> <img src="/imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"></td>
                    <td> $ <?php echo $propiedad->precio ?> </td>
                    <td>
                        <form method="POST" class="w-100">

                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">

                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>

                <?php }; ?>
            </Tbody>

        </table>
    </main>

<?php

    // Cerrar la base de datos
    mysqli_close($db);

    incluirTemplate("footer");
?>