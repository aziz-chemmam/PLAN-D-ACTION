<?php

    class Utilisateurs {
        private $id;
        private $nom;
        private $email ;
        private $motDePasse;
    

        public function getId() {
            return $this->id;
        }
        
        public function setId($id) {
            $this->id = $id;
        }

        public function getNom() {
            return $this->nom;
        }   
        
        public function setNom($nom) {
            $this->nom = $nom;
        }
        
        public function getEmail() {
            return $this->email;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function getMotDePasse() {
            return $this->motDePasse;
        } 


   



    }


?>