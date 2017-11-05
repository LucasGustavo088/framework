<?php

$route[] = ['/', 'HomeBase@index'];
$route[] = ['/posts', 'PostBase@index'];
$route[] = ['/post/{id}/show', 'PostBase@show'];

return $route;