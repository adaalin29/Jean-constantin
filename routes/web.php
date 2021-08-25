<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');
Route::get('despre', 'DespreController@index');
Route::get('contact', 'ContactController@contact');
Route::get('evenimente', 'EvenimenteController@evenimente');
Route::get('eveniment-detaliu/{url_slug}', 'EvenimenteController@evenimentDetaliu');
Route::get('comunicate', 'ComunicatController@comunicate');
Route::get('comunicat-detaliu/{url_slug}', 'ComunicatController@comunicatDetaliu');
Route::get('program', 'ProgramController@program');
Route::get('program-detaliu/{url_slug}', 'ProgramController@programDetaliu');
Route::get('cauta', 'CautaController@cauta');
Route::get('tarife', 'TarifeController@tarife');

// Posts

Route::post('send-message', 'ContactController@send_message');
Route::post('send-request', 'TarifeController@send_request');

//GDPR

Route::get('confidentialitate', 'IndexController@confidentialitate');
Route::get('cookies', 'IndexController@cookies');
Route::get('termeni', 'IndexController@termeni');



Route::get('/storage/thumb/{query}/{file?}', 'ThumbController@index')
    ->where([
        'query' => '[A-Za-z0-9\:\;\-]+',
        'file'  => '[A-Za-z0-9\/\.\-\_]+',
    ])
    ->name('thumb');

    
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
