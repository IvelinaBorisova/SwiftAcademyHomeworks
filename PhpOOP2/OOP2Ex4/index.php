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
class MobileDevice {  
    private $model;
    private $factory;
    private $owner;
    private $typeOfBattery;
    private $typeOfScreen;
    public function __construct($model =' ',$factory =' ',$owner = ' ',$typeOfBattery= ' ',$typeOfScreen = ' ') {
        $this->model =$model;
        $this->factory =$factory;
        $this->owner =$owner;
        $this->typeOfBattery=$typeOfBattery;
        $this->typeOfScreen = $typeOfScreen;
        
    }
       
}    
$MyDevice = new MobileDevice('Galaxy S6','Samsung','Ivelina B','2550mAh','Super AMOLED');
$MyDevice2 = new MobileDevice('Galaxy S7','Samsung','Ivelina B','3600mAh','Super AMOLED');
$MyDevice3 = new MobileDevice('6s','Iphone','Ivelina B','2750mAh','3D Touch');

?>
    
        
    </body>
</html>
