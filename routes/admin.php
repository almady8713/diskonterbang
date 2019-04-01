<?php

    Route::get('/', 'PagesController@index');

    Route::get('/services', function () {
        return ('welcome to the job');
    });

