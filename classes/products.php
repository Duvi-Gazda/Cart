<?php  
    require_once __DIR__ .'/product.php'; 
    require_once __DIR__ .'/filters.php'; 
        class Products{
            private $filePath;
            private array $products;
            function __construct($filePath){
                $this->products = [];
                $this->filePath = $filePath;
                $data = json_decode(file_get_contents($this->filePath));
                foreach($data as $subData){
                    $product = new Product($subData->id, $subData->name, $subData->title, $subData->attribute, $subData->category, $subData->price,$subData->picture, $subData->description, $subData->short_description);
                    array_push($this->products,$product);
                }
            }
            function __destruct(){
                $copy = json_encode($this->getProducts());
                file_put_contents($this->filePath,$copy);
            }
            public function getProducts(){
                $arr = [];
                foreach($this->products as $product){
                    $copy = $product->getProductAsArray();
                    array_push($arr, $copy);
                }
                return $arr;
            }
            public function getFilterData($filters){
                $copyData = [];
                // get all products one by one
                foreach($this->products as $element){
                    // get all array elements one by one
                    foreach($element->getProductAsArray() as $condition=>$value){
                        // get all filters all one by one 
                        foreach($filters->getFilterAsArray() as $filterName => $filterVal){
                            // if condition name and condition from good and their values coincide
                            //echo "$filterName $condition     $filterVal   $value <br>";
                            if(($filterName == $condition)&&($filterVal == $value)){
                                // push  it to arr 
                                array_push($copyData, $element);
                            }
                        }
                    }
                }
                return $copyData;
            }
        }       