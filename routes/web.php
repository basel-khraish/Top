<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form\form1Controller;
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


Route::get('form1',[form1Controller::class,'form1'])->name('form1');
Route::post('form1',[form1Controller::class,'form1_submit'])->name('form1_submit');

Route::get('form2',[form1Controller::class,'form2'])->name('form2');
Route::post('form2',[form1Controller::class,'form2_submit'])->name('form2_submit');

Route::get('form3',[form1Controller::class,'form3'])->name('form3');
Route::post('form3',[form1Controller::class,'form3_submit'])->name('form3_submit');

Route::get('form4',[form1Controller::class,'form4'])->name('form4');
Route::post('form4',[form1Controller::class,'form4_submit'])->name('form4_submit');
