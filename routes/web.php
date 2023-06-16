<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ControlpanelController;

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

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Logout Route
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Todo Route
Route::get('/todo', [TodoController::class, 'showTodoForm'])->name('todo');

// Task route
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
//controlpanel route
Route::get('/controlpanel', [ControlpanelController::class, 'controlpanel'])->name('controlpanel');



