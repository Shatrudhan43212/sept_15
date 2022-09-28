<?php
class Customer{
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
}
class VIP extends Customer{
    public function getFormattedName(){
        return ucwords($this->name);
    }
}

$alex = new VIP('shatrudhan kumar');
echo $alex->getFormattedName();

?>