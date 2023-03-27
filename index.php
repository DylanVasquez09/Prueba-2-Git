<?php

    class Persona {

        private $id;

        private $nombre;

        public function getId () : string
        {
            return $this->id;
        }

        public function getNombre () : string
        {
            return $this->nombre;
        }
    }
?>