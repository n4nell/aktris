<?php
class Connect {
    private $h="localhost", $u="root", $p="", $db="aktris";
    function connect() {
        return new mysqli($this->h, $this->u, $this->p, $this->db);
    }
}