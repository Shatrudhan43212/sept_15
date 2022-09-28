<?php 
class Robot{
    public function greet(){
        return 'Hello';
    }
}

class Android extends Robot{
    public function greet(){
        return 'hi';
    }
}

$robot = new Robot();
echo $robot->greet();

echo '<br>';

$android = new Android();
echo $android->greet();

?>