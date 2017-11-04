<?php

$route[] = ['/', 'home_base@index'];
$route[] = ['/posts', 'post_base@index'];
$route[] = ['/post/{id}/show', 'post_base@show'];

return $route;