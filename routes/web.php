<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/skills', function(){
	return ['Laravel', 'PHP', 'Java'];
});