<?php
//$table = 'personal_data';
//$results = $app['database']->selectAll($table);
//$tasks = createQueryTable($results);
$users = App::get('database')->selectAll('users');
require 'views/index.view.php';
