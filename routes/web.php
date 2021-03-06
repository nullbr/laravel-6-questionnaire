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

Route::get('user/logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionnaires', 'QuestionnaireController@index')->name('allQuestionnaires');
Route::get('/questionnaires/create', 'QuestionnaireController@create')->name('createQuestionnaire');
Route::post('/questionnaires', 'QuestionnaireController@store')->name('storeQuestionnaire');
Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show')->name('showQuestionnaire');

Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create')->name('createQuestion');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store')->name('storeQuestion');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy')->name('deleteQuestion');


Route::get('/surveys/{questionnaire}-{title}', 'SurveyController@show')->name('takeSurvey');
Route::post('/surveys/{questionnaire}-{title}', 'SurveyController@store')->name('answerSurvey');
