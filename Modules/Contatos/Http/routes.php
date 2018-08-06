<?php

Route::group(['middleware' => 'web', 'prefix' => 'contatos', 'namespace' => 'Modules\Contatos\Http\Controllers'], function()
{
    Route::get('/', 'ContatosController@index');
    Route::get('/novo', 'PeopleController@create');
    Route::post('/novo', 'PeopleController@store');
    Route::get('/teste', 'PeopleController@show');
});
