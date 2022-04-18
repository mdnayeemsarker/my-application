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
    return view('welcome');
});




// Route::get('/about', function () {
//     return view('about');
// });

Route::get(md5('/about'), function () {
    return view('about');
})->name('about.us');

// Route::view('/about', 'about'); // View Route

Route::get('/contactbody', function () { // Named Route
    return view('contact');
})->name('contact.us');

// Route::get('/contact/{roll}', function ($roll) { // Route With Parametter
//     return "Your Roll is $roll";
// });




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
