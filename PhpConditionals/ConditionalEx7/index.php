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
$a = -3;
$b = -5;
$c = 1;

if (($a > $b)&&($a > $c) ){
    if ($b>$c){
    echo $a.' '.$b.' '.$c; }
    else {echo $a.' '.$c.' '.$b;}
}
if (($b > $a)&&($b > $c) )
{
     if ($a>$c){
    echo $b.' '.$a.' '.$c; }
    else {echo $b.' '.$c.' '.$a;}
}
if (($c > $a)&&($b < $c) )
{
     if ($b>$a){
    echo $c.' '.$b.' '.$a; }
    else {echo $c.' '.$a.' '.$b;}
}


?>
    </body>
</html>
