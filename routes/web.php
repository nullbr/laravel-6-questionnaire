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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaires/create', 'QuestionnaireController@create')->name('createQuestionnaire');
Route::post('/questionnaires', 'QuestionnaireController@store')->name('storeQuestionnaire');
Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show')->name('showQuestionnaire');

Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create')->name('createQuestion');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store')->name('storeQuestion');
