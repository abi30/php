


<?php 

class Person{
public $first="Abdulla";
private $last= "Rakib";
private $age=34;
}

class Pet extends Person{

    public function owner(){
        $a=$this->first;

        return $a;
    }


}



?>