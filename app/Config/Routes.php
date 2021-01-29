<?php
require __DIR__.'/../../Core/RouterCore.php';

$router->get('/', '\App\Controllers\WebController@index');

$router->run();
