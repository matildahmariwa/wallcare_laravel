<?php

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
Route::get('/', 'PagesController@index')->name('/home');
Route::get('/services', 'PagesController@services')->name('services');

Route::get('/about_us', 'PagesController@about')->name('about');
Route::get('/projects', 'PagesController@showProjects')->name('projects');
Route::get('/projects/{p}', 'ProjectsController@show')->name('project');

Route::get('/blog/{id}', 'BlogsController@show')->name('blogs');
Route::get('/blog', 'BlogsController@index')->name('blog');


// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
