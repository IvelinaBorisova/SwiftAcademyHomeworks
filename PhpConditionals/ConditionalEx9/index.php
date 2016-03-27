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
$MyNumber = 111;
if($MyNumber == 0){echo 'zero';}

$edinici = $MyNumber%10;
$desetici = (($MyNumber-$edinici)/10)%10;
$stotici = ($MyNumber - (($desetici*10) +  $edinici))/100;

       
       switch($stotici){
           case 1 : echo 'one hundred';
               break;
           case 2 : echo 'two hundred';
               break;
           case 3 : echo 'three hundred';
               break;
           case 4 : echo 'four hundred';
               break;
           case 5 : echo 'five hundred';
               break;
           case 6 : echo 'six hundred';
               break;
           case 7 : echo 'seven hundred';
               break;
           case 8 : echo 'eight hundred';
               break;
           case 9 : echo 'nine hundred';
              break;
           default: break;
       }   
       if ((($desetici != 0)||($edinici != 0))&&($stotici != 0)) {echo ' and  ';}
           switch($desetici){
           case 1 : switch($edinici){
                    case 0 : echo ' ten';
                        break;
                    case 1 : echo ' eleven';
                        break;
                    case 2 : echo ' twelve';
                        break;
                    case 3 : echo ' thirteen';
                        break;
                    case 4 : echo ' fourteen';
                        break;
                    case 5 : echo ' fifteen'; 
                        break;
                    case 6 : echo ' sixteen';
                        break;
                    case 7 : echo ' seventeen';
                        break;
                    case 8 : echo ' eighteen';
                        break;
                    case 9 : echo ' nineteen';
                        break;
                    default : break;
           }
                    
               break;
           case 2 : echo ' twenty';
               break;
           case 3 : echo ' thirty';
               break;
           case 4 : echo ' forty';
               break;
           case 5 : echo ' fifty';
               break;
           case 6 : echo ' sixty';
               break;
           case 7 : echo ' seventy';
               break;
           case 8 : echo ' eighty';
               break;
           case 9 : echo ' ninety';
              break;
           default: break;
       } 
       
       if ($desetici != 1){
       switch($edinici){
           case 1 : echo ' one';
               break;
           case 2 : echo ' two';
               break;
           case 3 : echo ' three';
               break;
           case 4 : echo ' four';
               break;
           case 5 : echo ' five';
               break;
           case 6 : echo ' six';
               break;
           case 7 : echo ' seven';
               break;
           case 8 : echo ' eight';
               break;
           case 9 : echo ' nine';
               break;
           default: break;
       }
       }
       ?>
    </body>
</html>
