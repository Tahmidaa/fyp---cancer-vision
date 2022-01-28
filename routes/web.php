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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('\home');
});

Route::get('/awareness', function () {
    return view('awareness');
});

Route::get('/result', function () {
    return view('result');
});

Route::get('/breastresult', function () {
    return view('breastresult');
});

Route::get('/lungresult', function () {
    return view('lungresult');
});

Route::get('/cervicalresult', function () {
    return view('cervicalresult');
});

Route::get('/colonresult', function () {
    return view('colonresult');
});

Route::get('/nocancer', function () {
    return view('nocancerresult');
});



Route::get('/form3', function () {
    return view('form3');
});

Route::get('/form4', function () {
    return view('form4');
});

Route::get('/form5', function () {
    return view('form5');
});

Route::get('/userguide', function () {
    return view('userguide');
});

Route::get('/consultation', function () {
    return view('consultation');
}) -> middleware('authenticated');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/breast', function () {
    return view('\Awareness\breast');
});

Route::get('/lung', function () {
    return view('\Awareness\lung');
});

Route::get('/colon', function () {
    return view('\Awareness\colon');
});

Route::get('/cervical', function () {
    return view('\Awareness\cervical');
});

 Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index') -> middleware('authenticated');
 Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');

 Route::get('/form', [App\Http\Controllers\Form1Controller::class, 'createUserForm']) -> middleware('authenticated');
 Route::post('/form', [App\Http\Controllers\Form1Controller::class, 'UserForm'])->name('validate.form');

 
 Route::get('/form', [App\Http\Controllers\Form1Controller::class, 'createUserForm']) -> middleware('authenticated');
 Route::post('/form', [App\Http\Controllers\Form1Controller::class, 'UserForm'])->name('validate.form');

 Route::get('/form2', [App\Http\Controllers\Form2Controller::class, 'createUserForm2']) -> middleware('authenticated');
 Route::post('/form2', [App\Http\Controllers\Form2Controller::class, 'UserForm2'])->name('validate.form2');

 Route::get('/form3', [App\Http\Controllers\Form3Controller::class, 'createUserForm3']) -> middleware('authenticated');
 Route::post('/form3', [App\Http\Controllers\Form3Controller::class, 'UserForm3'])->name('validate.form3');

 Route::get('/form4', [App\Http\Controllers\Form4Controller::class, 'createUserForm4']) -> middleware('authenticated');
 Route::post('/form4', [App\Http\Controllers\Form4Controller::class, 'UserForm4'])->name('validate.form4');

 Route::get('/form5', [App\Http\Controllers\Form5Controller::class, 'createUserForm5']) -> middleware('authenticated');
 Route::post('/form5', [App\Http\Controllers\Form5Controller::class, 'UserForm5'])->name('validate.form5');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
