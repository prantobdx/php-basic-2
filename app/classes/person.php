<?php

namespace App\classes;

class Person{
    public $distict ="Savar";
    protected $division ="Dhaka";
    private $country ="Bangladesh";

    public function district()
    {
        echo 'Mirpur-1';
    }

    protected function division()
    {
        echo 'Dhaka';
        //  $this->country();

    }

    private function country()
    {
        echo 'Bangladesh';
    }


}