<?php

use Illuminate\Support\Facades\Route;
use App\Models\Publication;

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

// Route::redirect('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/register');

Route::get('/dashboard', function () {
    $publications = Publication::all();
    return view('dashboard')->with('publications', $publications);
})->middleware(['auth'])->name('dashboard');

Route::get('/publications', [\App\Http\Controllers\PublicationsController::class, 'index']);

require __DIR__.'/auth.php';

