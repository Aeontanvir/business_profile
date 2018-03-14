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

Route::get('/', 'HomeController@index');
Route::resource('services', 'ServicesController');
Route::resource('groups', 'GroupsController');
Route::resource('subjects', 'SubjectsController');
Route::resource('courses', 'CoursesController');
Route::resource('members', 'MembersController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
