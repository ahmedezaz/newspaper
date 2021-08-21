<?php

class details{
    public $name, $age, $salary;
    
    function __construct($n = "None", $a = "None", $s = "None"){
        $this->name = $n;
        $this->age = $a; 
        $this->salary = $s; 

    }

    function info(){
        echo "Employee";
        echo $this->name. "<br>";
        echo $this->age. "<br>";
        echo $this->salary. "<br>";


    }


}

//details is the parent class of manager
//manager can use deatils class property and method

class manager extends details {
    public $tel = 20;
    public $tea = 50;
    public $total;

    function info(){
 
        $this->total = $this->salary + $this->tel + $this-> tea;
        echo "Manager:";
        echo $this->name. "<br>";
        echo $this->age. "<br>";
        echo $this->total. "<br>";


    }

}

$employee = new details("Leonard", 45, 20);
$manager = new manager("Rajon", 55, 30);


$employee->info();
$manager->info();



?>
