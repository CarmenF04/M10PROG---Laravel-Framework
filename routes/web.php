<?php

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

// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatsController;
use App\Http\Controllers\DogsController;

// Route naar de homepagina
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route naar de cats pagina
Route::get('/cats', [CatsController::class, 'index'])->name('cats.index');

// Route naar de dogs pagina
Route::get('/dogs', [DogsController::class, 'index'])->name('dogs.index');
