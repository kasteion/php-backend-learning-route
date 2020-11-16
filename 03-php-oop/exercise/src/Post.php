<?php

namespace App;

class Post {
    private $author;
    private $category;

    public function __construct($author, $category ) {
        $this->author =  $author;
        $this->category = $category;
    }

}

?>
