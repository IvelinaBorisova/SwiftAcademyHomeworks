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
        class SortElArray {
            private $arr = [];
            public function __construct($_arr){
                $this->arr = $_arr;
            }

            public function getArr(){
             return $this->arr;   
        }
            public function sortArray (){
             sort($this->arr); 
              return $this->arr;
              
            }  
        }

        $arraySorting = array (1,32,43,66,6,5);
        $SortClass = new SortElArray(array ($arraySorting));
         echo $SortClass->sortArray();
      
              

        ?>
    </body>
</html>
