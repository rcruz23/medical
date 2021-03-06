<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

/*Route::get('/nosotros', function () {
    return view('about');
});*/

Route::get('/servicios', function () {
    return view('services');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/personal', function () {
    return view('personal.main');
});

Route::get('/cuestionario', function () {
    return view('personal.questionary');
});

Route::get('/valoracion', function () {
    return view('personal.biometric-assessment');
});

Route::get('/estadisticas-peso', function () {
    return view('personal.statistics.weight');
});

Route::get('/estadisticas-cardio', function () {
    return view('personal.statistics.cardio');
});

Route::get('/estadisticas-lab', function () {
    return view('personal.statistics.laboratory');
});

Route::get('/apoyo-seguimiento', function () {
    return view('support-monitoring');
});

Route::get('/blog', function () {
    return view('blog');
});