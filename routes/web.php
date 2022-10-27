<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\cadUserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\cadUser;
use Illuminate\Support\Facades\Gate;

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
    return redirect(route('tasks.index'));
});

Route::resource('/tasks', TaskController::class);


Route::get('users', [UserController::class, 'index']);
Route::get('users/show/{user}', [UserController::class, 'show']);
Route::get('users/admin/{user}', [UserController::class, 'superAdmin']);
Route::get('users/edit/{user}', [UserController::class, 'edit']);
Route::post('users/update/{user}', [UserController::class, 'update']);
Route::get('users/create', [cadUserController::class, 'cadUser']);
Route::post('users/create', [cadUserController::class, 'store']);


require __DIR__.'/auth.php';
