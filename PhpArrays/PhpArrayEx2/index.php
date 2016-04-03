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
        function printArray ($arr){
            
          for ($i = 0; $i < count($arr); $i++ ){
              echo $arr[$i].' ';
          }
 }
 function removeElement($index, $arr){
     for ($i = 0; $i < count($arr); $i++ ){
         if ($i === $index){
                  unset ($arr[$i]);
         } 
     }
     printArray($arr);
 }
 
$x = [0,1,2,3,4,5,6,7,8,9,10];
removeElement(5, $x);


?>
    </body>
</html>
