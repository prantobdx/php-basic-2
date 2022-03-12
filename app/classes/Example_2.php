<?php

namespace App\classes;

class Example_2 {
    public function index()
    {
      
        echo "Hello World";
    for ($this->i = 45; $this->i > 22  ; $this->i--)
        {
        echo $this->i.'<br />';
        
        }

    $this->i = 10;
    while ($this->i < 20)
    {
        echo $this->i;
        $this->i++;
    }

    $this->i =10;
    do{
        echo $this->i;
        $this->i++;
    }
    while($this->i < 20);
    

}
}
