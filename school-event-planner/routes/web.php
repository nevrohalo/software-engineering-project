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

Route::get('/about', 'PagesController@redirectToAboutUsPage');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/events', 'EventsController');

Route::resource('/enrollments', 'EnrollmentsController');

Auth::routes();

// Route::get('/student', 'PagesController@redirectToStudentPage');

// Route::get('/student-portal', 'PagesController@redirectToStudentPortal');

// Route::get('/organizer', 'PagesController@redirectToOrganizerPage');

// Route::get('/organizer-portal', 'PagesController@redirectToOrganizerPortal');