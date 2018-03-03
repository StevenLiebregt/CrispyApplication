<?php

use StevenLiebregt\CrispySystem\Routing\Router;
use StevenLiebregt\CrispySystem\Routing\Route;

Router::group()
    ->setHandlerPrefix('App\\Controllers\\')
    ->routes(function() {

        // Home route
        Route::get('/', 'HomeController.index')
            ->setName('home');

        // Item
        Route::get('/item/{id}', 'ItemController.index')
            ->where('id', '(\\d+)')
            ->setName('item');

        // 404 Catch All
        Route::any('{any}', 'Http404Controller.index');

});