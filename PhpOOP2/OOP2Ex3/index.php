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
class Vehicles {
    private $brandName;
    private $numbOfWheels;
    private $seats;
    private $color;
    private $year;
    public function __construct($brandName = 'UNKNOWN',$numbOfWheels = 0, $seats = 1,$color = 'white', $year = 1900 ) {
        $this->brandName = $brandName;
        $this->numbOfWheels = $numbOfWheels;
        $this->seats =  $seats;
        $this->color = $color;
        $this->year = $year;
    }
    public function getBrandName(){
        return $this->brandName;
        
    }

    public function display() {
        echo $this->brandName.' '.$this->numbOfWheels.' '.$this->seats.' '.$this->color.' '.$this->year;
        
    }
    public function Selling() {
        echo 'The Vehicle is sold! ';
        
    }
    public function getYear() {
        return $this->year;
    }
}
    
    
    $Car = new Vehicles;
    $Car->display();
    $Car->Selling();
       ?>
    </body>
</html>
