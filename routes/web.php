<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/instructor/courses', \App\Http\Livewire\Instructor\Courses::class)
    ->name('instructor-courses');

Route::middleware(['auth:sanctum', 'verified'])->get('/instructor/course/create/{page}', \App\Http\Livewire\Instructor\Course\CreateWizard::class)
    ->name('instructor-course-create');
