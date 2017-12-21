<?php

spl_autoload_register(function ($class_name) {
    include '../' . $class_name . '.php';
});


Router::get('/', function ($result) {
    $result->text('Hello world');
});

Router::get('/json', function ($result) {
    $result->json($_SERVER);
});

Router::get('/html', function ($result) {
    $result->view('test');
});

Router::get('/run', function ($result) {
    $result->run('uptime', true);
});


Router::render();
