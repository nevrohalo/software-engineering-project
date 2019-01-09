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

Route::get('/', 'PagesController@redirectToIndex');

Route::get('/main', 'PagesController@redirectToMainPage');

Route::get('/event', 'PagesController@redirectToEventPage');

Route::get('/student', 'PagesController@redirectToStudentPage');

Route::get('/student-portal', 'PagesController@redirectToStudentPortal');

Route::get('/organizer', 'PagesController@redirectToOrganizerPage');

Route::get('/organizer-portal', 'PagesController@redirectToOrganizerPortal');

Route::get('/about', 'PagesController@redirectToAboutUsPage');