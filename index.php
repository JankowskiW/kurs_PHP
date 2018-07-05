<?php
// sudo apt install php7.1-mysql

require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';

$router = Router::load('routes.php');

require $router->direct(Request::uri(),Request::method());


$posts = [
    new Post('My First Post', 'JW', true),
    new Post('My Second Post', 'EG', true),
    new Post('My Third Post', 'WJ', false),
    new Post('My Fourth Post', 'JW', false)
];


function unbublishedFilter($post)
{
    return !$post->published; //Zwraca true jeśli published == false
}

$unpublishedPosts = array_filter($posts, "unbublishedFilter");


$publishedPosts = array_filter($posts, function ($post) {
    return $post->published; // Zwraca true jeśli published == true
});

function mapFun($post)
{
    $post->published = true;
    return $post;
}

$modified = array_map("mapFun", $posts);


$authors = array_column($posts, 'author', 'title');
