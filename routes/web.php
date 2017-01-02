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

Route::get('/', 'HomeController@showHome');

/*
    Contact routes : 
*/

Route::get('contact' , 'ContactController@showContact');
Route::post('contact' , 'ContactController@mailTo');

/*
    Skill routes : 
*/

Route::get('skills' , 'HomeController@showSkills');

/*
    Portfolio page :
*/

Route::get('portfolio', 'HomeController@showPortfolio');

/*
    About me : 
*/
Route::get('about', 'HomeController@showAbout');