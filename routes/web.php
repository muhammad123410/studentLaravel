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
    return view('Pages.index');
});
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('Students','StudentsController');


Route::resource('subject','SubjectsController');
Route::resource('teacher','TeachersController');
Route::resource('Student_Subject','Student_SubjectController');
Route::resource('Subject_Teacher','Subject_TeacherController');
Route::resource('Student_Teacher','Student_TeacherController');
Route::resource('Student_Subject_Teacher','Student_Subject_TeacherController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/selectSubject/create','Student_SubjectController@create');
// Route::get('Students/{$id}/selectSubject/create','Student_SubjectController@create');


Route::get('Students/{Student}/AllSubjects','StudentsController@selectSubject');
Route::get('teacher/{teacher}/AllSubjects','TeachersController@selectSubject');

Route::get('Students/{Student}/selectTeacher/{course_id}','StudentsController@selectTeacher');
Route::get('teacher/{teacher}/viewStudents/{id}','TeachersController@viewStudents');

