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
$SCORE = -1;
if (($SCORE >=0)&&($SCORE<=3)){
    $SCORE *= 10;
}
else if (($SCORE >=4)&&($SCORE<=6)){
    $SCORE *= 15;
}
    else if (($SCORE >=7)&&($SCORE<=9)){
    $SCORE *= 20;
}
        else if ($SCORE >=10){
            $SCORE *= 100;
        }   
            else echo 'INVALID SCORE: ';

            echo $SCORE;
            

        ?>
    </body>
</html>
