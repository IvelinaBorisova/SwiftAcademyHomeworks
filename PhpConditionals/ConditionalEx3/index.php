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
$CHARACTER = '1'; // '2','Q'
$COUNT = 0;
$Cards = ['2','3','4','5','6','7','8','9','10','J','Q','K','A'];
foreach($Cards as $element){
if($element == $CHARACTER) {
    echo 'Yes';
    $COUNT = 1; 
}   
}

if ($COUNT == 0) {
    echo 'No';
}

?>
    </body>
</html>
