
<?php

$menuItems = array("foo", "bar", "hello", "world");


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
  
</head>
<body>

<div class="topnav">


<?php


foreach ($menuItems as $value) {

       $val='';

    if($value=='foo'){
        $val='active';
    }
  
    
    echo" <a class='$val'>$value</a>   ";
    
}

?>


 </div>
    
</body>
</html>