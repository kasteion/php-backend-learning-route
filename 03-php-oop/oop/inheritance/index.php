<?php

// Se puede declarar una clase como final y con esto no va poder heredarse de ella.
class User {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    // Al declarar una función como final, entonces no puedo cambiarlo en la clase que hereda.
    final public function getName(){
        return $this->name;
    }
}

class Admin extends User {
    //public function getName(){
    //    return "Soy $this->name";
    //}
}

$admin = new Admin('Italo');
echo $admin->getName();
$user = new User('Fredy');
echo $user->getName();
?>
