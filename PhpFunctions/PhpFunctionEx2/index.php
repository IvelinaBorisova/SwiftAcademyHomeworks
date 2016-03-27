<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = 56;
        $b = 12343;
        
        
function biggerNumb ($numb1, $numb2){
    
    if ($numb1 > $numb2) {
        echo $numb1.' > '.$numb2;
    }
    else if ($numb1 == $numb2) {
        echo $numb1.' = '.$numb2;
    }
    else echo $numb2.' > '.$numb1;
    
    
}    
biggerNumb($a, $b);
?>
    </body>
</html>
