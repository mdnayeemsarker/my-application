<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
use App\Http\Controllers\Custome\FirstController;

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

Route::get('/controller', [FirstController::class, 'index'])->name('controller');
// Route::get('/user', [FirstController::class, 'show'])->name('controller');

Route::get('/country', function(){
    return view('country');
})->name('country')
->middleware('country');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// 01. 1ta Domain & Hosting
// 02. Admin Panel -> Laravel
// 03. Android Apps
