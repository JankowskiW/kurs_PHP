<?php

function dd($valToDump)
{
    echo '<pre>';
    die(var_dump($valToDump));
    echo '</pre>';
}


function createQueryTable($results)
{
    $tasks = [];
    foreach ($results as $result) {
        $tasks[$result->id] = new Task($result->imie, $result->nazwisko, $result->wiek);
    }
    return $tasks;
}

