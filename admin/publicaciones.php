<?php

require_once 'conection.php';

class Publicaciones
{

    public $id;
    public $titulo;
    public $descripcion;
    public $url_img;

    function __construct($id=null, $titulo=null, $descripcion=null, $url_img=null)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->url_img = $url_img;
    }

    public function get($limit=null){
        $cn = getConection();
        $query = "SELECT * FROM publicaciones";
        
        if($limit){
            $query = $query." ORDER BY id DESC  LIMIT 0, $limit ";
        }
        
        $result = $cn->query($query);
        $cn->close();
        return $result;
    }

    public function getById($id){
        $cn = getConection();
        $query = "SELECT * FROM publicaciones WHERE id='$id'";
        $result = $cn->query($query)->fetch_assoc();
        $cn->close();
        return $result;
    }

    public function save(){
        $cn = getConection();
        $query = "INSERT INTO publicaciones ('titulo','descripcion','url_img')".
        "VALUES('$this->titulo','$this->descripcion','$this->url_img')";
        $result = $cn->query($query);
        $cn->close();
        return $result;
    }

    public function delete($id){
        $cn = getConection();
        $query = "DELETE FROM publicaciones WHERE id='$id'";
        $result = $cn->query($query);
        $cn->close();
        return $result;
    }
}