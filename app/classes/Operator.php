<?php

namespace App\classes;

class Operator
{
    // =====Operator=====

    /*
    *Arithmatic Operator
     *Binary operator(+,-,*,/,%)
     *unary Operator(++,--,(-))

     *Assignment Operator(=,+=,-=,*=,/=,%=,.=)
     *conditional Operator(>,>=,<.<=,==,!=,===,!==)
     *logical Operator(&&,||,!)


    */

    public $x;
    public $y;
    protected $z;

    public function index()
    {

        $this->x =10;
        $this->y =20;
        $this->z =30;
        $this->f =50;


        /*===== Statement ====

        *Single Line Statement
        *Conditional Statement
           *if
           *if else
           *if else if
           *switch
        *Repeated Statement
           *FOR
           *WHILE
           *DO WHILE
        *Array   
        */

        // echo 'hello statement';

        switch ($this->f)
        {
            case 10:
                echo "hello world";
                break;
            case 20:
                echo "Hello City"; 
                break;
            case 30:
                echo "Hello Bangladesh"; 
                break;
            default:
            echo 'Bye';          
        }


        // if($this->x > $this->y)
        // {
        //     echo 'hello bitm';
        // }
        // elseif ($this->y > $this->z)
        // {
        //     echo 'Hello Dhaka';
        // }
        // elseif ($this->z > $this->x)
        // {
        //     echo 'Hello Basis';
        // }
        // else{
        //     echo 'bye';
        // }

        // if ($this->x < $this->y)
        // {
        //     echo 'Its true';
        // }
        // else {
        //     echo 'False';
        // }



        // ..............................

        // echo ($this->x > $this->y)||($this->y > $this->z);
        // echo '<br/>.....<br/>'; 
        // echo ($this->x > $this->y)||($this->y < $this->z);
        // echo '<br/>.....<br/>'; 
        // echo ($this->x < $this->y)||($this->y > $this->z);
        // echo '<br/>.....<br/>'; 
        // echo ($this->x < $this->y)||($this->y < $this->z);
        // echo '<br/>.....<br/>'; 

        // echo $this->x += $this->y;
        // echo '<br/>'; // $x = $x+$y =30
        // echo $this->x -= $this->y;
        // echo '<br/>'; // $x = $x-$y =10
        // echo $this->x *= $this->y;
        // echo '<br/>'; // $x=$x*$x =200 
        // echo $this->x /= $this->y;
        // echo '<br/>'; //$x = $x/$y =10
        // echo $this->x %= $this->y;
        // echo '<br/>';//$x = $x%$y =10
        // echo $this->x .= $this->y;
        // echo '<br/>';//$x = $x.$y =1020

    //     echo $this->x;
    //     echo '<br/>';
    //    echo $this->x = $this->y;
       

        // echo -$this->x;

        // echo $this->x++;//10
        // echo '<br/>';

        // echo $this->x--;//11
        // echo '<br/>';

        // echo ++$this->x;//11
        // echo '<br/>'; 

        // echo $this->x--;//11
        // echo '<br/>';

        // echo $this->x++;//10
        // echo '<br/>';

        // echo $this->x--;//11
        // echo '<br/>';

        // echo ++$this->x;//11
        // echo '<br/>';

        // echo --$this->x;//10
        // echo '<br/>';



        // $result= $this->x + $this->y;
        // echo $result;
        // echo '<br/>';
        // echo $this->x - $this->y;
        // echo '<br/>';
        // echo $this->x * $this->y;
        // echo '<br/>';
        // echo $this->x / $this->y;
        // echo '<br/>';
        // echo $this->x % $this->y;
        // echo '<br/>';
    }
    
}