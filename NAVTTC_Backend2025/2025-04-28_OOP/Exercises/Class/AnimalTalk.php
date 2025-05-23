<?php
class Animal{

    public $name;
    public $gender;

public function talk(){

if ($this->name== "Dog"){
echo "Dog is Barking ";
}elseif($this->name== "Cat") {
    echo "Cat is Meow ";
}elseif($this->name== "Elephant")
{
    echo "Elephant is Trumpeting";
}else {
    echo "Where Animal Went??";
}
return ;
}

}
?>