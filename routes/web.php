<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
// 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about','AboutController@about');

Route::get('/contact','ContactController@contact');
Route::get('/test','HomeController@test');
Route::get('/testresource','HomeController@testresource');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Courses Routes
Route::prefix('courses')->name('courses.')->group(function(){
    Route::get('/', 'CourseController@index')->name('index');
    Route::get('/{courseId}', 'CourseController@show')->name('show');
});


//Admin Routes
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin');
    // Route::get('/users', 'AdminController@getUsers')->name('users');
    Route::resource('/users', 'UserController');

    Route::get('/students', 'AdminController@getStudents')->name('students');   
});


// Student Routes
Route::prefix('classroom')->name('classroom.')->group(function(){
    Route::get('/home', 'StudentController@index')->name('index');
    Route::get('/', 'StudentController@index')->name('index');
});    	

Route::resource('api/users','TestResourceController');
Route::apiResource('api/tests','TestApiController'); // except the [create, edit] methods

Route::get('invoke', 'MyInvokeController');// for test the invoke parameter make:controller --invokable