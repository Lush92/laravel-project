<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('auth');
});
// Do something else here
Route::get('/', function () {
      return view('feature/auth');
});
