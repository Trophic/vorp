<?php


$app->get('/', function ($request, $response, $args) {
 
    return $response->write("Hello from Diet with Slim");
});

