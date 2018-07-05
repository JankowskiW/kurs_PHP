<?php

class Post
{
    public $title;
    public $author;
    public $published;

    public function __construct($_title, $_author, $_published)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->published = $_published;
    }
}

