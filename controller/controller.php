<?php 
include_once __DIR__."/../model/model.php";

class Controller extends Model{
    function getAktris(){ return $this->findAll(); }

    function getAktrisById($id){
        $id=preg_replace('/\D/', '', $_GET['id']??'');
        return $id? $this->findOne($id):null;
    }
}