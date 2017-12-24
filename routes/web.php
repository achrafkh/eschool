<?php

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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses', 'HomeController@courses')->name('courses');

Route::middleware(['auth'])->group(function () {
  	Route::get('/courses/{id}', 'HomeController@courses')->name('courses');
    Route::get('/course/{id}', 'HomeController@course')->name('course');

    Route::get('mycourses/{category?}','HomeController@myCourses');
});

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('users', 'UsersController');
    Route::post('/user/{id}/courses','UsersController@storeCourses');
  	Route::get('/dashboard', 'CategoriesController@dashboard')->name('dash');

  	Route::get('categories', 'CategoriesController@index')->name('cIndex');
  	Route::post('categories/create', 'CategoriesController@create')->name('postcCreate');
  	Route::post('categories/update', 'CategoriesController@update')->name('postcUpdate');
  	Route::post('categories/delete', 'CategoriesController@delete')->name('postcDel');


  	Route::get('courses', 'CoursesController@index')->name('coIndex');
    Route::get('courses/upload/{id}', 'CoursesController@showUpload')->name('coUpload');
    Route::post('/courses/upload/{id}', 'CoursesController@doUpload');

  	Route::post('courses/create', 'CoursesController@create')->name('postcoCreate');
  	Route::post('courses/update', 'CoursesController@update')->name('postcoUpdate');
  	Route::post('courses/delete', 'CoursesController@delete')->name('postcoDel');
});

