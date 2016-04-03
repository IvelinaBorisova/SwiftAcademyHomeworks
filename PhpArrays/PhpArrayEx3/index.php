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
function addElement($index, $arr, $newElement)
{ 
if(count($arr)<$index) {
    array_push($arr, $newElement);
    printArray($arr);

}
 else { array_splice($arr, $index, 0, $newElement);
 for($i = 0; $i<count($arr); $i++){
     if($i == count($arr)){
         echo $arr[$index].' ';
     }
     else echo $arr[$i].' ';
 }
 
 
 }
}

$myArr = [0,1,2,3,4,5]; 
addElement(1, $myArr, 99);
echo '<br>';
addElement(111, $myArr, 99);



        ?>
    </body>
</html>
