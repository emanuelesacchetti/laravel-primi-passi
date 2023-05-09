<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'message' => 'Benvenuti nel mio nuovo sito bello bello!!'
    ];

    return view('home', $data);
})->name('home');



Route::get('/about', function () {

    $data = [
        'message' => 'Questa invece è la sezione che parla di noi',
        'aboutList' => [
            'chi siamo',
            'cosa abbiamo fatto',
            'i nostri studi',
            'le nostre esperienze'
        ]
    ];

    return view('about', $data);
})->name('about');




Route::get('/contactUs', function () {

    $data = [
        'message' => 'Qui puoi vedere tutti i nostri contatti',
        'contactList' => [
            'maccio@mimmo.it',
            'mario@mimmo.it',
            'herbert@mimmo.it',
            'capatonda@mimmo.it'
        ]
    ];

    return view('contactUs', $data);
})->name('contact');




Route::get('/download', function () {

    $data = [
        'message' => 'Scarica tutto ciò che vuoi',
        'downloadList' => [
            'versione windows',
            'versione Mac',
            'versione Linux',
            'versione Ubuntu'
        ]
    ];

    return view('download', $data);
})->name('download');
