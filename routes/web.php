<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->group(function(){
    Route::get('/dashboard','index')->name('dashboard');
    Route::get('/create-student','create')->name('student.create');
    Route::post('/add-student','store')->name('student.add');
    Route::get('/student/{id}/edit',[StudentController::class,'edit'])->name('student.edit');
    Route::post('/student/{id}/update', 'update')->name('student.update');
    Route::get('/student/{id}/delete', 'remove')->name('student.delete');
});
