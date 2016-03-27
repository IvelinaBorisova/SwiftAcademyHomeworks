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
        //В таблицата е показано обратното
        //Аз го направих по-голямото число да е на първо място, както е написано...
          $a = 5; 
          $b = 2;
          $a1 = 3;
          $b1 = 4;
          $a2 = 5.5;
          $b2 = 4.5;
          if ($a>$b){
              echo $a.' '.$b.'<br>';
          }
          else{ echo $b.' '.$a.'<br>';}
          
              if ($a1>$b1){
              echo $a1.' '.$b1.'<br>';
          }
          else{ echo $b1.' '.$a1.'<br>';}
          
              if ($a2>$b2){
              echo $a2.' '.$b2.'<br>';
          }
          else{ echo $b2.' '.$a2.'<br>';}
 

        ?>
    </body>
</html>
