<?php 

    class promotion {
        private $id;
        private $promo;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getPromo(){
            return $this->promo;
        }
        public function setPromo($value){
            $this->promo = $value;
        }
    }

?>