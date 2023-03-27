<?php

    class Persona 
    {

        private $id;

        private $nombre;

        private $email;

        public function getId(): string
        {
            return $this->id;
        }



        public function getNombre(): string
        {
            return $this->nombre;
        }



        public function getEmail(): string
        {
            return $this->email;
        }
    }
?>