<?php 
include_once __DIR__."/../model/model.php";

class Controller extends Model{
    function getAktris(){ return $this->findAll(); }

    function getAktrisById($id){
        
    }
}