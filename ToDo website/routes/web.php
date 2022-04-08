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
/*Route::get('/', 'App\Http\Controllers\portfolioController@index');
Route::get('/personal_details', 'App\Http\Controllers\portfolioController@pdetails');  
Route::get('/career_stats', 'App\Http\Controllers\portfolioController@cstats');   
Route::get('/milestones', 'App\Http\Controllers\portfolioController@milestones');
Route::get('/queries', 'App\Http\Controllers\portfolioController@queries');
Route::get('/sendMail','App\Http\Controllers\portfolioController@email');---portfolio activity*/

/*Route::get('/', 'App\Http\Controllers\seederController@index');
Route::get('/users-database', 'App\Http\Controllers\seederController@user');
Route::get('/assignment-record', 'App\Http\Controllers\seederController@assignment');
Route::get('/marks-record', 'App\Http\Controllers\seederController@mark');
Route::get('/delete-form','App\Http\Controllers\seederController@delete');---seeder activity*/

/*Route::get('/', 'App\Http\Controllers\justemailController@index');
Route::get('/submit', 'App\Http\Controllers\justemailController@validation');
Route::get('/send', 'App\Http\Controllers\justemailController@quotes');---justemailActivity*/

Route::get('/', 'App\Http\Controllers\todoController@index');
Route::get('/add', 'App\Http\Controllers\todoController@add');
Route::get('/delete', 'App\Http\Controllers\todoController@delete');
Route::get('/description', 'App\Http\Controllers\todoController@description');

// Route::get('/', 'App\Http\Controllers\KidsLearningToolController@index');
// Route::get('/GetStarted', 'App\Http\Controllers\KidsLearningToolController@mainpage');
// Route::get('/exit', 'App\Http\Controllers\KidsLearningToolController@exit');
// Route::get('/Numbers', 'App\Http\Controllers\KidsLearningToolController@numbers');
// Route::get('/numberTest', 'App\Http\Controllers\KidsLearningToolController@number_test');




    
 




