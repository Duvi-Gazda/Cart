<?php
    require_once __DIR__ . '/configs/path.config.php';
    require_once CONFIG_CRYPT;
    // returns decrypted data KEY and TYPE from config
    function decrypt($data){
        return openssl_decrypt($data, METHOD,KEY);
    }
    //returns encrypted data KEY and TYPE from config
    function encrypt($data){
        return openssl_encrypt($data, METHOD, KEY);
    }
    // function return ready arr from json (after crypt)
    function getFromJSON($filePath){
        // get data from json
        $data = json_decode(file_get_contents($filePath),true);
        // dectrypt
        // foreach($data as $subData){
        //    // $subData = decrypt($subData);

        // }
        return $data;
    }
    // function set data to file (need file path and data)
    function setToJSON($data, $filePath){
        // encrypt
       // $data = encrypt($data);
        // convert to json standart
        $data = json_encode($data);
        // write to file1
        file_put_contents($filePath,$data);
    }
    // return products from storage
    function getALLProducts(){
        if(TYPE_STORAGE == 'json'){
            return getFromJSON(PRODUCTS);
        }
    }
    // set all data to storage
    function setAllData($data){
        if(TYPE_STORAGE == 'json'){
            setToJSON($data, PRODUCTS);
        }
    }
    // function takes data, sort it and return only sorted, that is in condition array
    /*
        ex.
        $products = [
            1 => [
                'id' => 12,
                'attr' => 'dafa',
                'name'=> 'Dafa',
                'categry' => 'carrot'
            ],
            2 => [
                'id' => 10,
                'attr' => 'cocacol-1.5',
                'name'=> 'Cocacola',
                'categry' => 'water'
            ]
        ]
        getOnlySortedData($products,array('category','carrot')); // will return  ['id' => 12,'attr' => 'dafa','name'=> 'Dafa','categry' => 'carrot'],
     */ 
    function getOnlySortedData($products,array $condisions){
        $copyData = [];
        // get all products one by one
        foreach($products as $element){
            // get all array elements one by one
            foreach($element as $condition=>$value){
                // get all conditions all one by one 
                foreach($condisions as $conditionName => $conditionVal){
                    // if condition name and condition from good and their values coincide
                    if(($conditionName == $condition)&&($conditionVal == $value)){
                        // push  it to arr 
                        array_push($copyData, $element);
                    }
                }
            }
        }
        // return all
        return $copyData;
    }
    // function adds product(s) to array
    function addProducts($productArray, $products){
        if(is_array($products)){
            foreach($products as $product){
                array_push($productArray,$product);
            }
        }else{
            array_push($productArray,$products);
        }
    }
    // function get text and link and make html link
    function makeHtmlLink($text,$link){
        return "<a href=\"$link\">$text</a>";
    }