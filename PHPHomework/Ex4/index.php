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
$A[0] = 6;
$A[1] = 3;
$A[2] = 8;
$A[3] = -7;
$B[0] = -4;
$B[1] = 4;
$B[2] = -10;
$B[3] = -8;
$C[0] = 1;
$C[1] = -10;
$C[2] = 4;
$C[3] = 14;
echo 'a*x2 + b*x + c = 0<br/>';

$D[0] =($B[0]*$B[0]) - (4*$A[0]*$C[0])  ;
$D[1] =(($B[1]*$B[1]) - (4*$A[1]*$C[1]))  ;
$D[2] =($B[2]*$B[2]) - (4*$A[2]*$C[2])  ;
$D[3] =($B[3]*$B[3]) - (4*$A[3]*$C[3])  ;

if($D[0] >= 0 ){
    $x1[0] = ((-$B[0])+ sqrt($D[0]))/(2*$A[0]);
    $x2[0] = ((-$B[0])- sqrt($D[0]))/(2*$A[0]);
    echo "x1 = $x1[0]; x2 = $x2[0].<br/>";
}
else {echo 'Error<br/>';}

if($D[1] >= 0 ){
    $x1[1] = ((-$B[1])+ sqrt($D[1]))/(2*$A[1]);
    $x2[1] = ((-$B[1])- sqrt($D[1]))/(2*$A[1]);
    echo "x1 = $x1[1];  x2 = $x2[1]. <br/>";
}
else {echo 'Error <br/>';}

if($D[2] >= 0 ){
    $x1[2] = ((-$B[2])+ sqrt($D[2]))/(2*$A[2]);
    $x2[2] = ((-$B[2])- sqrt($D[2]))/(2*$A[2]);
    echo "x1 = $x1[2]; x2 = $x2[2]. <br/>";
}
else {echo 'Error<br/>';}

if($D[3] >= 0 ){
    $x1[3] = ((-$B[3])+ sqrt($D[3]))/(2*$A[3]);
    $x2[3] = ((-$B[3])- sqrt($D[3]))/(2*$A[3]);
    echo "x1 = $x1[3]; x2 = $x2[3].<br/>";
}
else {echo 'Error<br/>';}

        ?>
    </body>
</html>
