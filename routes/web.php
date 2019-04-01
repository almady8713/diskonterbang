<?php

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
    require __DIR__.'/admin.php'; // Route for backend
});

Route::group(['namespace' => 'Frontend'], function(){

    Route::get('/', 'PagesController@index');
    

});

