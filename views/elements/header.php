<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <?php 
        if(is_array($links)){
            foreach($links as $link){
                echo $link;
            }
        }else{
            echo $links;
        }
    ?>
</head>
<body>
