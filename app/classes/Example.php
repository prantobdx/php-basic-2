<?php

namespace App\classes;

use App\classes\Person;

class Example extends Person
{
    public $firstName;
    protected $middleName;
    private $lastName;
    public $firstNumber =10;
    protected $SecondNumber =20;
    private $lastNumber = 30;

    public function index()
    {

        // $this->firstName = "Santo";
        // $this->firstName = "Shila";
        // $x ='bd';
        // $x = '10.34';
        // $x = 10.34;
        // $x = true;
        // echo gettype($this->firstName);

        // echo gettype($x);
        $this->firstName = "Mr."; 
        echo $this->firstName;
    }


    public function methodOne()
    {
        $this->middleName = 'Habbiur';
        echo $this->middleName;
    }

    public function methodTwo()
    {
        $this->lastName ="Rahman";
        echo $this->lastName;
    }

    public function methodThree()
    {
        // $distict ="Borisal"; local variable.
        // echo $this->distict;
        // echo $this->division;
        // echo $this->country;
        $this->xyz();
       
    }

    private function xyz()
    {
        echo 'hello world';
    }
}



