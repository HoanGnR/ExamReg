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

use Rap2hpoutre\FastExcel\FastExcel;
use App\StudentAccount;

Route::get('/', 'LoginController@index');
Route::get('/login', 'LoginController@index');

Route::get('logout', 'LoginController@logout');

Route::post('/login', 'LoginController@authLogin')->name('login');
// Student
Route::group(['prefix' => 'student', 'middleware' => 'student'], function () {
    Route::get('/', 'StudentLayoutController@index')->name('studentHome');
});
// Admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');


    // Sinh vien
    Route::group(['prefix' => 'sinh-vien'], function () {
        Route::get('danh-sach', 'StudentController@list');
        Route::post('import', 'StudentController@import')->name('importStudents');
    });
    Route::resource('sinh-vien', 'StudentController');

    // room
    Route::group(['prefix' => 'room'], function () {
        Route::get('/', 'RoomController@index');
    });
    Route::resource('room', 'RoomController');

    // Module
    Route::group(['prefix' => 'module'], function () {
        Route::get('/','ModuleController@index');
        Route::get('/list-student/{id}','ModuleController@listStudent');
        Route::post('/list-student/{id}','ModuleController@storeStudent');
        Route::delete('/list-student/{id}','ModuleController@destroyStudent');
    });
    Route::resource('module','ModuleController');

    // Exam
    Route::group(['prefix' => 'exam'], function () {
        Route::get('/','ExamController@index');
    });
    Route::resource('exam','ExamController');

    // Exam Area
    Route::group(['prefix' => 'exam-area'], function () {
       Route::get('/','ExamAreaController@index');
    });
    Route::resource('exam-area','ExamAreaController');

    // Exam Shift
    Route::group(['prefix' => 'exam-shift'], function () {
        Route::get('/','ExamShiftController@index');
    });
    Route::resource('exam-shift','ExamShiftController');

    // Exam Room
    Route::group(['prefix' => 'exam-room'], function () {
        Route::get('/','ExamRoomController@index');
    });
    Route::resource('exam-room','ExamRoomController');
});
