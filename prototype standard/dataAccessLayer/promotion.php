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
            return $this->task;
        }
        public function setPromo($value){
            $this->task = $value;
        }
    }

?>