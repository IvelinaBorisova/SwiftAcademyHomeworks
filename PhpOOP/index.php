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
class Dog {
    private $color;
    private $breed;
    private $colorOfEyes;
    private $hairLength;
    public function toWalk(){
        return true;
    }
    public function toRun (){
        echo  'Dog is running!  ';
    }
    public function toBark (){
        echo 'Dog is barking! ';
    }
    public function toBite () {
        echo 'Dog is bitting! ';
    }
    public function toDrinkWater () {
        echo 'Dog is drinking water! ';
    }
    public function toEat () {
        echo 'Dog is eating! ';
    }
   }
    class Human{
        public $gender;
        private $weight;
        private $myDog ;
        public function isMyDog(){
        $this->myDog = new Dog ($this);
        }
        public function toWalk () {
            echo 'Human is walking! ';
            }
        public function getGender () {
            
           return $this->gender;
        }
        public function toEat () {
        echo 'Human is eating! ';
        
    }
    public function toRun (){
        echo  'Dog is running!  ';
    }
    public function toSpeak () {
        echo 'Human is speaking! ';
    }
    
    public function toMeetSomeone (){
        echo 'Human is meeting someone! ';
    }

   }        
    

 
 $girl1 = new Human();
 $boy1 = new Human ();
 $girl1->gender= 'f';
 $girlDog = $girl1->toWalk();
 echo '<br >';
 $boy1->gender = 'f';
 $boyDog = $boy1->toWalk();
   echo '<br >';

 $test = ($girl1->gender == $boy1->gender ) ? false : true;
  if (( $test ) && ($girlDog === $boyDog )) {
      echo 'true';
  }
else echo 'false'; 


        ?>
    </body>
</html>
