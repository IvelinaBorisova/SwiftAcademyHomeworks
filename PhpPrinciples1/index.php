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
interface SoundInterface
{
  function makeSound();   
  
        }
        abstract class Animal {
    public $name;
    public $age;
    public $sex;
}
class Dog  extends Animal implements SoundInterface
            {
    function makeSound(){
        echo 'BAU-BAU';
    }
    
}

class Frog  extends Animal implements SoundInterface
            {
    function makeSound(){
        echo 'Kwak Kwak';
    }
            }
    class Cat  extends Animal implements SoundInterface
            {
    function makeSound(){
        echo 'MQU-MQU';
    }
    
    
            }
     class Kittens extends Cat {
         public $sex = 'female';
     }
     class Tomcat extends Cat {
         public $sex = 'male';
         
     }
     
     $arrayOfAnimal = [];
     $FrenchBuldog = new Dog();
     $FrenchBuldog->name='Frenchi';
     $FrenchBuldog->age=2;
     $FrenchBuldog->sex='male';
     $Siam=new Kittens();
     $Siam->name = "Katy";
     $Siam->age = 3;
          $arrayOfAnimal[] = $FrenchBuldog;
              $arrayOfAnimal[] = $Siam;
              //print_r($arrayOfAnimal);
              $count=0;
              foreach ($arrayOfAnimal as $key => $value) {
                  
                  $count= $count + $value->age;
                  
              }
              echo $count/2;
     
        ?>
    </body>
</html>
