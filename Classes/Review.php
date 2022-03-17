<?php
    class Review {
        public $id;
        public $name;
        public $date;
        public $description;
        public $stars;

        public function _construct(){
            settype($this->id, 'integer');
        }
    }
?>