<?php 
        class Filter{
            private $name;
            private $val;
    
            public function __construct($name, $val/*, $id*/){
                $this->name = $name;
                $this->val = $val;
            }
            public function getVal(){
                return $this->price;
            }
            public function getName(){
                return $this->description;
            }
            
    
            public function setVal($val){
                $this->val = $val;
            }
            public function setName($name){
                $this->name = $name;
            }
            public function getFilterAsArray(){
                return $arr = [
                    // 'name' => $this->name,
                    // 'val' => $this->val
                    $this->name => $this->val
                ];
            }
        }