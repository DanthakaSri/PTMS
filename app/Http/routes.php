<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');


//Timetable Calendar
Route::get('allEvents{id?}', 'TimeTableManageController@index');
Route::get('allHolidays{id?}', 'TimeTableManageController@holidayCalendar');
//Route::post('guardaEventos', array('as' => 'guardaEventos','uses' => 'CalendarController@create'));
Route::post('createEvents', 'TimeTableManageController@create');
Route::post('updateEvents', 'TimeTableManageController@update');
Route::post('deleteEvents', 'TimeTableManageController@delete');



Route::group(['middleware' => 'auth'], function ()
{
    Route::get('home', 'HomeController@index');
    Route::get('holiday', 'TimetableManageController@holiday');
    Route::resource('user', 'UserController');
    Route::resource('course', 'CourseController');
    Route::resource('faculty', 'FacultyController');
    Route::resource('hall', 'HallController');
    Route::resource('lecturer', 'LecturerController');
//Route::resource('student', 'StudentController');
    Route::resource('subject', 'SubjectController');
    Route::resource('timetable', 'TimetableController');
});

Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController',]);
