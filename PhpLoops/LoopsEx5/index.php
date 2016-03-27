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
function makeMatrix($numb){
    $myArray = [[]];
    for($i = 0; $i < $numb; $i++) { 
    for($j = 0;$j< $numb; $j++ )
    { $myArray[i][j] = $i+$j;
    echo $myArray[i][j].' ';
    if ($myArray[i][j]% $numb == 0){
        echo '<br />';
    }
    
    }
    } 
     
   makeMatrix(2); 
   echo '<br />';
   makeMatrix(4);
   echo '<br />';
   makeMatrix(6);
        ?>
    </body>
</html>
