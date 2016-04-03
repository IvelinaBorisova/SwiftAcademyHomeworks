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
        
 
        function lowestTemp($arr){
       asort($arr);
       $cnt = 1;
       foreach ($arr as $key => $val) {
    if ($cnt >5){ break;}
    else echo "$val ";
    $cnt++;
    
}
        }
       function highestTemp($arr){
           arsort($arr);
           $cnt = 1;
foreach ($arr as $key => $val) {
    if ($cnt >5){ break;}
    else echo "$val ";
    $cnt++;
    
}

       }

       function avarageTemp($arr){
           $getSum = 0;
           for($i = 0; $i < count($arr); $i++){
            $getSum += $arr[$i];    
           }
           echo  ($getSum/2).'<br>' ;
       }
$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
 lowestTemp($temperature);
 echo '<br>';
 highestTemp($temperature);
 echo '<br>';
 avarageTemp($temperature);
        ?>
    </body>
</html>
