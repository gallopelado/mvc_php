<?php

//Incluir archivos php modelos
require_once 'model/ciudad_model.php';

class ciudad_controller {

    private $model_e, $model_d;

    public function __construct() {
        $this->model_e = new ciudad_model();
    }

    public function index() {

        $titulo = 'CIUDADES';

        $query = $this->model_e->get();

        //header
        require_once 'view/header.php';
        //La vista que se requiera
        require_once 'view/index.php';
        //footer
        require_once 'view/footer.php';
    }

    public function ciudad() {
        $data = null;
        if(isset($_REQUEST['_id'])){
            $data = $this->model_e->getId($_REQUEST['_id']);
        }
        $titulo = 'EDITAR-CIUDADES';

        //$query = $this->model_e->get();
        //header
        require_once 'view/header.php';
        //La vista que se requiera
        //require_once 'view/index.php';
        require_once 'view/ciudad.php';
        //footer
        require_once 'view/footer.php';
    }

    public function guardar_registro() {
        $data['descripcion'] = $_REQUEST['descri'];
//        echo $_REQUEST['descri'];
//        echo $_REQUEST["identificador"];
        $id = $_REQUEST['identificador'];
        if($id > 0){
//            echo 'entro en modificar';
            $this->model_e->edit($data, $id);
        }else{
//            echo 'entro en guardar';
            $this->model_e->add($data);
        }
//        $this->index();
        header("Location:index.php");
    }

    public function delete() {
        $data = null;
        if(isset($_REQUEST['_id'])){
            $data = $this->model_e->delete($_REQUEST['_id']);
        }
        //$this->index();
        header("Location:index.php");
    }

}
?>

