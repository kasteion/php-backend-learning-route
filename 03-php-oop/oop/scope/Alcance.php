<?php

class User {
    // public: Cualquiera puede modificar o utilizar los atributos públicos.
    // protected: Solo las clases que heredan de esta podrían utilizar los atributos o metodos declarados como protected.
    // private: Solo se van a utilizar desde la clase, no la pueden usar clases que heredan.

    public const PAGINATE = 25;
    public $username;
    
    public function getUsername(){
    }   
}

?>
