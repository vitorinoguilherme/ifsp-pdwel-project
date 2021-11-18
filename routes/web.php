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

Route::get('/', function() {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        $publications = Publication::all();
        return view('dashboard')->with('publications', $publications);
    })->name('dashboard');


    Route::get('/publications', [\App\Http\Controllers\PublicationsController::class, 'index'])->name('publication.index');
    Route::get('/publications/{publication_id}', [\App\Http\Controllers\PublicationsController::class, 'show'])->name('publication.show');

    Route::get('/dashboard/create/publication', [\App\Http\Controllers\PublicationsController::class, 'create']); //shows create post form
    Route::post('/dashboard/create/publication', [\App\Http\Controllers\PublicationsController::class, 'store']); //saves the created post to the databse
    Route::get('/dashboard/{publication}/edit', [\App\Http\Controllers\PublicationsController::class, 'edit']); //shows edit post form
    Route::put('/dashboard/{publication}/edit', [\App\Http\Controllers\PublicationsController::class, 'update']); //commits edited post to the database
    Route::delete('/dashboard/{publication}', [\App\Http\Controllers\PublicationsController::class, 'destroy']); //deletes post from the database

});




require __DIR__.'/auth.php';

