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
    Route::post('/update-student/{id}', 'edit')->name('student.update');
    Route::post('/delete-student/{id}', 'remove')->name('student.delete');
});
