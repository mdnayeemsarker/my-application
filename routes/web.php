<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomController;

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

Route::get(md5('/about'), [CustomController::class, 'about'])->name('about.us');

Route::get('/contactbody', [CustomController::class, 'contact'])->name('contact.us');

Route::get('/country', [CustomController::class, 'country'])->name('country')->middleware('country');

Route::get('/controller', [CustomController::class, 'controller'])->name('controller');

Route::get('/dashboard', [CustomController::class])->middleware(['auth'])->name('dashboard');

Route::get('/csrf_token', [CustomController::class, 'csrf'])->name('csrf_token');

Route::post('/student', [CustomController::class, 'StudentStore'])->name('student.store');

Route::post('/about.store', [CustomController::class, 'about_store'])->name('about.store');

Route::post('/contact.store', [CustomController::class, 'contact_store'])->name('contact.store');

require __DIR__.'/auth.php';

// 01. 1ta Domain & Hosting
// 02. Admin Panel -> Laravel
// 03. Android Apps
