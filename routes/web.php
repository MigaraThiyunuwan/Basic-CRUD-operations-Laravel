<?php

use App\Http\Controllers\StudentController;
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

//Route for get view directly
    // Route::get('student/all',function( ){
    //     return view('Student.index');
    // });

//Route get view through controller
Route::get('/student/all',[StudentController::class,'index'])->name('student.index');
Route::get('student/create',[StudentController::class,'create'])->name('student.create');
Route::post('student/save',[StudentController::class,'save'])->name('student.save');
Route::get('student/{student_id}',[StudentController::class,'edit'])->name('student.edit');
Route::put('student/{student_id}',[StudentController::class,'update'])->name('student.update');
Route::get('student/delete/{student_id}',[StudentController::class,'delete'])->name('student.delete');