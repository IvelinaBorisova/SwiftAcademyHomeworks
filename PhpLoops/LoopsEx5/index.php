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
    for($i = 0; $i < $numb; $i++)
    {for($j = $i + 1;$j<=$numb+$i; $j++ )
        if ($j<10)
        {
            echo ' ';
        }
        echo $j.' ';
   
       
       
       
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
