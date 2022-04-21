<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\admin\ClassController;

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

Route::get('/', [CustomController::class, 'index']);

Route::get('/about/us', [CustomController::class, 'about'])->name('about.us');

Route::get('/contact/us', [CustomController::class, 'contact'])->name('contact.us');

Route::get('/country', [CustomController::class, 'country'])->middleware('country')->name('country');
Route::get('/controller', [CustomController::class, 'controller'])->name('controller');

Route::get('/dashboard', [CustomController::class])->middleware(['auth'])->name('dashboard');

Route::get('/csrf_token', [CustomController::class, 'csrf'])->name('csrf_token');
Route::get('/about.store', [CustomController::class, 'StudentStoref'])->name('about.store');
Route::post('/contact.store', [CustomController::class, 'contact_store'])->name('contact.store');

Route::post('/student', [CustomController::class, 'StudentStore'])->name('student.store');

Route::post('/about.store', [CustomController::class, 'about_store'])->name('about.store');

//__class crud routes__//
Route::get('/class', [ClassController::class, 'index'])->name('class.index');
Route::get('/create/class', [ClassController::class, 'create'])->name('create.class');
Route::post('/store/class', [ClassController::class, 'store'])->name('store.class');
Route::get('/class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// 01. 1ta Domain & Hosting
// 02. Admin Panel -> Laravel
// 03. Android Apps
