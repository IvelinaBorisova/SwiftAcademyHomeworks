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
for ($i = 0; $i <= 1000; $i++ ){
    
     if (($i%7 != 0)&&($i%3 != 0)&&($i != 1000)){echo $i.', ';}
     if ($i == 1000 ) {echo $i.'.'; }
     
 }
 
 
 ?>
    </body>
</html>
