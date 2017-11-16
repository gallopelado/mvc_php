<?php
    class conexion{
        public static function conectar(){
            try {
                $con = new PDO("pgsql:host=localhost;port=5432;dbname=prueba;user=postgres;password=123");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //$con->exec('SET CHARACTER SET UTF8');
            } catch (Exception $e) {
                die('Error '.$e->getMessage());
                echo 'Linea del error '.$e->getLine();
            }
            return $con;
        }
    }
?>

