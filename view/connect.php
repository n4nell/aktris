<?php
class Connect {
    private $h="localhost", $u="admin", $p="admin123", $db="aktris";
    function connect() {
        return new mysqli($this->h, $this->u, $this->p, $this->db);
    }
}