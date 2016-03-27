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
function reverseNumb($numb){
    if($numb < 0 ) {return reverseNumb( abs($numb));}
    else if (($numb >= 0)&&($numb < 10)) {
    return $numb;
    }
    else {
    $sum = 0;
    while(floor($numb)){
    $newNum = $numb % 10;
    $sum = $sum * 10 + $newNum;
    $numb = (int)$numb/10;
    }
    return $sum;
}}
    echo reverseNumb(-3214);
?>