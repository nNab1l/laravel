<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AboutController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [ \App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/projects/add', [ ProjectController::class, 'add' ])->name('project.add');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');

Route::prefix('/dashboard')
     ->middleware(['auth', 'verified'])
     ->group(function () {
         Route::get(
             '/',
             function () {
                 return view('dashboard');
             })->name('dashboard');

         Route::resources(
             [
                 'project' => ProjectAdminController::class,
             ]
         );
     });


