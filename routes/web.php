<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\CreateImage;
use App\Http\Livewire\CreatePartner;
use App\Http\Livewire\CreateProject;
use App\Http\Livewire\CreateUser;
use App\Http\Livewire\Home;
use App\Http\Livewire\IndexImages;
use App\Http\Livewire\IndexPartners;
use App\Http\Livewire\IndexProjects;
use App\Http\Livewire\IndexUsers;
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


Route::get('/', Home::class)->name('home');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('projects', IndexProjects::class)->name('index-projects');
    
    Route::get('/photos', IndexImages::class)->name('index-images');
    
    Route::get('/partners', IndexPartners::class)->name('index-partners');
    
    Route::get('create-user', CreateUser::class)->name('create-user');

    Route::get('users', IndexUsers::class)->name('index-users');
    
});

require __DIR__ . '/auth.php';
