<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [StudentController::class,'index']);

// Route::get('/index', [StudentController::class,'add']);
// Route::post('/index', [StudentController::class,'store']);

Route::prefix('index')->name('index.')->group(function(){
    Route::resource('student',StudentController::class);
});

Route::get('add', [StudentController::class,'add']);
