<?php
        class Product{
            private $id;
            private $name;
            private $title;
            private $attribute;
            private $category;
            private $price;
            private $picture;
            private $description;
            private $short_description;
            public function __construct($id, $name, $title, $attribute, $categoty, $price, $picture, $description, $short_description){
                $this->id = $id;
                $this->name = $name;
                $this->title = $title;
                $this->attribute = $attribute;
                $this->category = $categoty;
                $this->price = $price;
                $this->picture = $picture;
                $this->description = $description;
                $this->short_description = $short_description;
            }
            public function getID(){
                return $this->id;
            }
            public function getName(){
                return $this->name;
            }
            public function getAttribute(){
                return $this->attribute;
            }
            public function getCategory(){
                return $this->category;
            }
            public function getPrice(){
                return $this->price;
            }
            public function getDescription(){
                return $this->description;
            }
            public function getShortDescription(){
                return $this->short_description;
            }
            
    
            // public function setID($id){
            //     return $this->id;
            public function setName($name){
                $this->name = $name;
            }
            public function setAttribute($attribute){
                $this->attribute = $attribute;
            }
            public function setCategory($category){
                $this->category = $category;
            }
            public function setPrice($price){
                $this->price = $price;
            }
            public function setDescription($description){
                $this->description = $description;
            }
            public function setShortDescription($short_description){
                $this->short_description = $short_description;
            }
    
            public function getProductAsArray(){
                return $arr = [
                    'id' => $this->id,
                    'name' => $this->name,
                    'title' => $this->title,
                    'attribute' => $this->attribute,
                    'category' => $this->category,
                    'price' => $this->price,
                    'picture' => $this->picture,
                    'description' => $this->description,
                    'short_description' => $this->short_description,
                ];
            }
        }