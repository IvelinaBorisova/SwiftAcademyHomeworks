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
function gmp_fact($number){
    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * gmp_fact($number-1)); 
    } 
}
function surface ($x = 1, $n = 1 )     {
    $S = 1;
    for ($i = 1; $i<=$n; $i++){
        $S=$S + (gmp_fact($i))/pow($x,$i);
        
    }
    return $S;
}   
echo surface(2,3);
echo '<br/>';
echo surface(3,4);
echo '<br/>';
echo surface(-4,5);
echo '<br/>';
?>
    </body>
</html>
