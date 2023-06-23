<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ControlpanelController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpenAIController;

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
Route::get('/todo', [TaskController::class, 'index'])->name('todo');

// Task route
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
// Controlpanel route
Route::get('/controlpanel', [ControlpanelController::class, 'controlpanel'])->name('controlpanel');

// View task route
Route::get('/tasks/{id}', [TaskController::class, 'view'])->name('tasks.view');

// Delete task route
Route::get('/tasksdelete/{id}', [TaskController::class, 'destroy'])->name('tasks.delete');

// Complete task route
Route::get('/tasks/complete/{id}', [TaskController::class, 'complete'])->name('tasks.complete');

// About-us route
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/openai', [OpenAIController::class, 'index'])->name('openai.index');
