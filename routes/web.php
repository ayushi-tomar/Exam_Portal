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

//Route::get('/', function () {
    //return view('welcome');
//});
//category
Route::get('admin', 'AdminController@index');
Route::get('category', 'AdminController@category');
Route::post('savecategory', 'AdminController@savecategory');
Route::get('editcategory/{id}', 'AdminController@editcategory');
Route::post('update', 'AdminController@update');
Route::get('delete/{id}', 'AdminController@delete');

//manageexam
Route::get('manageexam', 'AdminController@manageexam');
Route::post('savemanage', 'AdminController@savemanage');
Route::get('editexam/{id}', 'AdminController@editexam');
Route::post('updateexam', 'AdminController@updateexam');
Route::get('deleteexam/{id}', 'AdminController@deleteexam');
Route::get('addquestion/{id}', 'AdminController@addquestion');



//managestudent
Route::get('managestudent', 'AdminController@managestudent');
Route::post('savestudent', 'AdminController@savestudent');
Route::get('editstudent/{id}', 'AdminController@editstudent');
Route::post('updatestudent', 'AdminController@updatestudent');
Route::get('deletestudent/{id}', 'AdminController@deletestudent');




//portal
Route::get('portal', 'AdminController@portal');

Route::get('portal/signup', 'PortalController@signup');
Route::post('saveportal', 'PortalController@saveportal');

Route::get('portal/login', 'PortalController@login');
Route::post('savelogin', 'PortalController@savelogin');

//portaloperation
Route::get('portal/dashboard', 'PortaloperationController@dashboard');
Route::get('portal/examform/{id}', 'PortaloperationController@examform');
Route::post('submit', 'portaloperationController@submit');
Route::get('portal/print/{id}', 'PortaloperationController@print');
Route::get('portal/updateform', 'portaloperationController@updateform');
Route::get('portal/studentexaminfo', 'PortaloperationController@studentexaminfo');
Route::get("portal/logout","portaloperationcontroller@logout");
//studentoperation
Route::get('student/signup', 'StudentController@signup');
Route::post('savesignup', 'StudentController@savesignup');
Route::get('student/dashboard', 'StudentOperationController@dashboard');
Route::get('student/logout','studentoperationController@logout');
Route::get('student/exam','studentoperationController@exam');
Route::get('student/joinexam/{id}','studentoperationController@joinexam');
Route::get('addquestion/{id}','AdminController@addquestion');
Route::post('savequestion','AdminController@savequestion');
Route::get('editquestion/{id}','AdminController@editquestion');
Route::post('updatequestion', 'AdminController@updatequestion');
Route::get('deletequestion/{id}', 'AdminController@deletequestion');


























Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
