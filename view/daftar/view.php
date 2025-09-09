<?php 
include_once __DIR__."/../../controller/controller.php";

class View extends Controller{
    function show() {
        foreach($this->getAktris() as $a) echo "
        <tr>
            <td>{$a['id']}</td>
            <td>{$a['nama']}</td>
            <td>{$a['negara']}</td>
            <td>{$a['aktif']}</td>
        </tr>";
    }

    function find() {
        if(!$da=$this->getAktrisBy()) return;
        foreach($da as $a) echo "
        <div>
            <h3>{$a['nama']}</h3>
            <p>Asal negara: {$a['negara']}</p>
            <p>Aktif sejak: {$a['aktif']}</p>
        </div>";
    }
}