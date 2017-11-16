<?php

class ciudad_model {

    private $db, $ciudades;

    public function __construct() {
        $this->db = conexion::conectar();
    }

    public function get() {
        $query = $this->db->query('SELECT * FROM ciudades');
        return $query->fetchAll(PDO::FETCH_ASSOC);//Cuando es fetchAll devuelve un array
//        while ($row = $query->fetchAll(PDO::FETCH_ASSOC)) {
//            $this->ciudades[] = $row;
//        }

//        return $this->ciudades;
    }

    public function add($data) {
        $sql = $this->db->prepare('INSERT INTO ciudades(ciu_descri) VALUES(?)');
        $sql->execute(array(strtoupper($data['descripcion'])));
    }
    
    public function edit($data,$id) {
        $sql = $this->db->prepare('UPDATE public.ciudades SET ciu_descri=:vdescri WHERE id=:vid');
        $sql->execute(array(":vdescri"=>strtoupper($data['descripcion']),":vid"=>$id));
    }

    public function getId($id) {
        $query = $this->db->prepare('SELECT * FROM ciudades WHERE id=?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);//Cuando es fetch devuelve la siguiente linea
//        if ($row = $query->fetchAll(PDO::FETCH_ASSOC)) {
//            $this->ciudades = $row;
//        }
//        return $this->ciudades;
    }

    public function delete($id) {
        $query = $this->db->prepare('DELETE FROM ciudades WHERE id=?');
        $query->execute(array($id));
    }

}
?>

