<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


//about us
Route::get('/about-us', function () {
    return view('aboutus');
});

//meet the team
Route::get('/meet-the-team', function () {
    return view('meettheteam');
})->name('meet-the-team');

//partner with us
Route::get('/partner-with-us', function () {
    return view('partnerwithus');
})->name('partner-with-us');

//contact us
Route::get('/contact-us', function () {
    return view('contactus');
})->name('contact-us');

//news
Route::get('/news-events', function () {
    return view('news');
})->name('news-events');

