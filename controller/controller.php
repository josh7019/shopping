<?php
    
    class Controller 
    {
        
        public function __construct($action)
        {
            $this->$action();
        }
    }
    