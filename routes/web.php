<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/phpinfo', function () {
//     // Check if DOMDocument class exists
//     if (class_exists('DOMDocument')) {
//         echo "DOMDocument is available.<br>";
//     } else {
//         echo "DOMDocument is NOT available.<br>";
//     }

//     // Display phpinfo
//     phpinfo();
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('privacy-policy', [PageController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('return-refund', [PageController::class, 'return_refund'])->name('return_refund');
Route::get('terms-condition', [PageController::class, 'terms_condition'])->name('terms_condition');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
