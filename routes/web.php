<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about.index');
});
Route::get('/services', function () {
    return view('services.index');
});
Route::get('/contactus', function () {
    return view('contactus.index');
});
Route::get('/chatbot', function () {
    return view('chatbot.index');
});
Route::get('/aibot', function () {
    return view('aibot.chatbot');
});
Route::get('/home', function () {
    return view('layouts.home');
});