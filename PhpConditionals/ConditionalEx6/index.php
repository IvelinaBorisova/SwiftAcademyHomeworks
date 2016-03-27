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
$a = 122;
$b = 2;
$c = 32;
$d = 4;
$e = -25;

$array = [$a,$b,$c,$d,$e];
$el0 = $a;
foreach($array as $el){
    if($el0<$el){
        $el0 = $el;
    }
}
echo $el0;



?>
    </body>
</html>
