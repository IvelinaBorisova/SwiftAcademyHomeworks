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
$a = 2;
$b = 1;
$c = -3;
$count = 0;
if (($a == 0)||($b == 0)||($c == 0))
{
    echo 'ERROR';
}
 if ($a<0){
    $count++;
}
 if ($b<0){
        $count++;
    }
 if ($c<0){
            $count++;
        }
 if (($count == 2 )||($count == 0)){
             echo 'The result is positive.';
                }   
       else {echo 'The result is negative.';}

?>
    </body>
</html>
