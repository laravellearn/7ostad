<?php

use Illuminate\Support\Facades\Auth;
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


Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::resource('/users','UserController');
    Route::resource('/students','StudentController');

    Route::resource('/studies','StudyController');
    Route::resource('/grades','GradeController');
    Route::resource('/lessongroups','LessongroupController');
    Route::get('/lessongroups/{study_id}/', 'LessongroupController@getGrade');

    Route::resource('/books','BookController');
    Route::resource('/topics','TopicController');

    Route::resource('/operations','OperationController');
    Route::resource('/targets','TargetController');
    Route::resource('/subtargets','SubtargetController');
    Route::get('/subtargets/{book_id}/', 'LessongroupController@getBook');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
