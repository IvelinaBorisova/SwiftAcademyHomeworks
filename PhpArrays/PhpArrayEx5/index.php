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
       function randNumb ($fromNumb, $toNumb){
           $arr = [];
            $a = $fromNumb;
           for ($i = 0; $i < ($toNumb-$fromNumb+ 2); $i++){
           while (in_array($a,$arr)) { //much time
         $a = rand($fromNumb ,$toNumb);
           }
         $arr[$i] = $a; 
       echo $arr[$i].' ';
           }      
           }
           
       
       echo randNumb(7, 15);
        ?>
    </body>
</html>
