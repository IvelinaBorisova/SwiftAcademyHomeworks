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
function getFact($numb){
    if ($numb == 0) return 1;
    else return $numb*getFact($numb-1);
    
}
echo getFact(5);

        ?>
    </body>
</html>
