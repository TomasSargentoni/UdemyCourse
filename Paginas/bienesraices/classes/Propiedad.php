<?php

namespace App;

class Propiedad {

    // Base de datos
    protected static $db;
    protected static $columnasDB = ["id","titulo","precio","imagen","descripcion","habitaciones","wc","estacionamiento","creado","vendedores_id"];

    // Errores
    protected static $errores = [];


    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;

    // Definir la conexion a la BD

    public static function setDB($database) {
        self::$db = $database;
    }

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? "";
        $this->titulo = $args["titulo"] ?? "";
        $this->precio = $args["precio"] ?? "";
        $this->imagen = $args["imagen"] ?? "";
        $this->descripcion = $args["descripcion"] ?? "";
        $this->habitaciones = $args["habitaciones"] ?? "";
        $this->wc = $args["wc"] ?? "";
        $this->estacionamiento = $args["estacionamiento"] ?? "";
        $this->creado = date('Y/m/d');
        $this->vendedores_id = $args["vendedores_id"] ?? "";
    }

    function guardar(){

        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();


            // Insertar en la base de datos
            $query = " INSERT INTO propiedades ( ";
            $query .= join(', ', array_keys($atributos));
            $query .= " ) VALUES (' ";
            $query .= join("' , '", array_values($atributos));
            $query .= " ') ";

            $resultado = self::$db->query($query);

            return $resultado;

    }

    // Identificar y unir los atributos de la BD
    public function atributos() {
        $atributos = [];
        foreach(self::$columnasDB as $columna) {
            if($columna === "id") continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }


    public function sanitizarAtributos() {
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach($atributos as $key => $value ) {
        $sanitizado[$key] = self::$db->escape_string($value);
        }


        return $sanitizado;
    }

    // Subida de archivos 
    public function setImagen($imagen) {
        // Asignar al atributo de imagen el nombre de la imagen
        if ($imagen) {
            $this->imagen = $imagen;
        }
    }
    
    // Validacion 
    public static function getErrores() {
        return self::$errores;
    }


    public function validar() {
        if(!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }

        if(!$this->precio) {
            self::$errores[] = "El precio es obligatorio";
        }

        if( strlen( $this->descripcion ) < 50 ) {
            self::$errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$this->habitaciones) {
            self::$errores[] = "El Numero de habitaciones es obligatorio";
        }

        if(!$this->wc) {
            self::$errores[] = "El Numero de Baños es obligatorio";
        }

        if(!$this->estacionamiento) {
            self::$errores[] = "El Numero de lugares de Estacionamiento es obligatorio";
        }

        if(!$this->vendedores_id) {
            self::$errores[] = "Elige un vendedor";
        }

        if(!$this->imagen ) {
            self::$errores[] = "La Imagen es Obligatoria";
        }



        return self::$errores;
    }

    // Lista todas las propiedades
    public static function all() {
        $query = "SELECT * FROM propiedades";

        $resultado = self::$db->query($query);

        debuguear($resultado);
        exit;
    }

    public static function consultarSQL($query) {
        
    }

}


?>