<?php
    namespace japan\name\tanaka;
    class Taro {
        private $name;

        public function getName() {
            return $this->name;
        }

        public function __construct() {
            $this->name = "田中太郎";
        }
    }
?>
