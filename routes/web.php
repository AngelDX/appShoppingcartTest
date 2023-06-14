<?php

use App\Http\Livewire\Admin\CategoryCrud;
use App\Http\Livewire\Indexweb;
use App\Http\Livewire\Web\ClientCreate;
use App\Http\Livewire\Web\Productshow;
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
// })->name('index');
Route::get('/',Indexweb::class)->name('index');
Route::get('/productos/{product}',Productshow::class)->name('product.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/categorias',CategoryCrud::class)->name('categories');
});
