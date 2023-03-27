<?php

    class Persona 
    {

        private $id;

        private $nombre;

        private $email;

        private $direccion;

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



        public function getDireccion(): string
        {
            return $this->direccion;
        }
    }
?>