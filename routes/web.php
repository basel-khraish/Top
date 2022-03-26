<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site1\Site1Controller;
use App\Http\Controllers\site2\Site2Controller;

Route::prefix('site1')->controller(Site1Controller::class)->name('site1.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact','contact_form')->name('contact_form');
    Route::get('/post/{id}','post')->name('post');
});



Route::prefix('site2')->controller(Site2Controller::class)->name('site2.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/portfolio','portfolio')->name('portfolio');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
});
