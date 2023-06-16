<?php

use App\Http\Livewire\Admin\CategoryCrud;
use App\Http\Livewire\Admin\RoleManagement;
use App\Http\Livewire\Admin\UserManagement;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:administrador']], function () {
    Route::get('/categorias',CategoryCrud::class)->name('categories');
    Route::get('/roles',RoleManagement::class)->name('roles');
    Route::get('/users',UserManagement::class)->name('users');
});

