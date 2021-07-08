<?php 
    class Movie {
        public $title; 
        public $year; 
        public $posterPath;
        public $text;

        function __construct($title, $year, $text, $posterPath = "") {
            $this->title = $title; 
            $this->posterPath = $posterPath; 
            $this->text = $text; 
            $this->year = $year;  
        }

        public function lessText($chars = 200) {
            return substr($this->text, 0 , $chars) . "..."; 
        }

    }


?>
