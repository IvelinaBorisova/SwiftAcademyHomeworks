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
function divisionFactoriel ($n = 3,$k = 2)
{
    if (($k == 0 )||($k <= 1)||($n < $k)||($n > 100)) {
        return 'ERROR';
        ;
    }
    return gmp_fact($n)/gmp_fact($k);
}
echo divisionFactoriel(5,2).'<br />';
echo divisionFactoriel(6,5).'<br />';
echo divisionFactoriel(8,3);



?>
    </body>
</html>
