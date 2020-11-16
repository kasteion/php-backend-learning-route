<?php

abstract class Basep {
    protected $name;

    private function getClassName(){
        return get_called_class();
    }

    public function login(){
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }
}

class Admin extends Basep {
    public function __construct($name){
        $this->name = $name;
    }
}

class User extends Basep {
    public function __construct($name){
        $this->name = $name;
    }
}

class Guest extends Basep {
    protected $name = 'Invitado';
}

$guest = new Guest();
echo $guest->login().'<br>';

$user = new User('Italo');
echo $user->login().'<br>';

$admin = new Admin('Lynda');
echo $admin->login().'<br>';

?>
