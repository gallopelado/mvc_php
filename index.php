<?php

require_once 'bd/conexion.php';

//    require_once 'controller/ciudad_controller.php';
//    
//    $controller = new ciudad_controller();
//    
//    //$controller->index();
//    
//    if(!empty($_REQUEST['m'])){
//        $metodo = $_REQUEST['m'];//El mismo nombre de la funcion debe ser
//        if(method_exists($controller, $metodo)){
//            $controller->$metodo();
//        }else{
//            $controller->index();
//        }
//    }else{
//        $controller->index();
//    }

$controller = 'ciudad';

// La siniestra logica del frontcontroller

if (!isset($_REQUEST['c'])) {

    require_once "controller/$controller" . "_controller.php";

    $controller = ucwords($controller) . '_controller';

    $controller = new $controller;

    $controller->index();
}else{
    
    //Obtenemos el controlador que deseamos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';
    
    //Instanciamos el controlador salvaje
    require_once "controller/$controller"."_controller.php";
    $controller = ucwords($controller).'_controller';
    $controller = new $controller;
    
    //llama la accion, dominar el mundo
    call_user_func(array($controller, $accion));
}
?>

