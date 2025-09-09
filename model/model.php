<?php
include_once __DIR__."/../view/connect.php";

class Model extends Connect {
    function findAll() {
        $r=$this->connect()->query("SELECT * FROM daftar");
        while($d=$r->fetch_assoc()) $p[]=$d;
        return $p??[];
    }

    function findOne($id) {
        $r=$this->connect()->query("SELECT * FROM daftar WHERE id=$id".intval($id));
        while($d=$r->fetch_assoc()) $p[]=$d;
        return $p??[];
    }
}