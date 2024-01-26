<?php 

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index(Router $router) {
        
        $propiedades = Propiedad::get(3);
        
        $inicio = true;

        $router->render("paginas/index",[
            "propiedades" => $propiedades,
            "inicio" => $inicio
        ]);
    }
    public static function nosotros(Router $router) {
        
        $router->render("paginas/nosotros");
    }
    public static function propiedades(Router $router) {
        
        $propiedades = Propiedad::all();
    

        $router->render("paginas/propiedades",[
            "propiedades" => $propiedades
        ]);
    }
    public static function propiedad(Router $router) {
        
        $id = validarORedireccionar("/propiedades");

        // Buscar la propiedad por su id
        $propiedad = Propiedad::find($id);

        $router->render("paginas/propiedad",[

            "propiedad" => $propiedad
        ]);
    }
    public static function blog(Router $router) {
        
        $router->render("paginas/blog");
    }
    public static function entrada(Router $router) {
        
        $router->render("paginas/entrada");
    }
    public static function contacto(Router $router) {
        
        if($_SERVER["REQUEST_METHOD"] === "POST") {
         
            $respuestas = $_POST["contacto"];

            // Crear una instancia de PHPMailer
            $mail = new PHPMailer();

            // Configurar SMTP
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '8be189e0168409';
            $mail->Password = '8847256cb6e2be';

            // Configurar el contenido del mail
            $mail->setFrom("admin@bienesraices.com");
            $mail->addAddress("admin@bienesraices.com", "BienesRaices.com");
            $mail->Subject = "Tienes un nuevo Mensaje";

            // Habilitar el HTML
            $mail->isHTML(true);
            $mail->CharSet = "UTF-8";

            // Definir el contenido
            $contenido = "<html>";
            $contenido .= "<p>Tienes un nuevo mensaje</p>";
            $contenido .= "<p>Nombre: " .  $respuestas["nombre"] . "</p>";
            $contenido .= "<p>Email: " .  $respuestas["email"] . "</p>";
            $contenido .= "<p>Telefono: " .  $respuestas["telefono"] . "</p>";
            $contenido .= "<p>Mensaje: " .  $respuestas["mensaje"] . "</p>";
            $contenido .= "<p>Vende o Compra: " .  $respuestas["tipo"] . "</p>";
            $contenido .= "<p>Precio o Presupuesto: $" .  $respuestas["precio"] . "</p>";
            $contenido .= "<p>Prefiere ser contactado por: " .  $respuestas["contacto"] . "</p>";
            $contenido .= "<p>Fecha Contacto: " .  $respuestas["fecha"] . "</p>";
            $contenido .= "<p>Hora: " .  $respuestas["hora"] . "</p>";
            $contenido .= "</html>";

            $mail->Body = $contenido;
            $mail->AltBody = "Esto es un texto alternativo sin HTML";   

            // Enviar el mail
            if($mail->send()) {
                echo "Mensaje enviado Correctamente";
            } else {
                echo "El mensaje no se pudo enviar...";
            }
            
        }

        $router->render("paginas/contacto",[

        ]);
    }
}


?>