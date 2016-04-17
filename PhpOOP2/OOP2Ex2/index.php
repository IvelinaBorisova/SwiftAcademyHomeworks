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
class Fact {   
    private $n;
    public function __construct($_n){
        $this->n = $_n;
    }
    public function calc($n){
        if ($n == 0) {return 1;}
        else {return $n*$this->calc ($n-1);}
    }
        }
    $myClass = new Fact(6);
    echo $myClass->calc(6);
        ?>
    </body>
</html>
