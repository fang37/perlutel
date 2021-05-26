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

Route::prefix('sympoza')->group(function() {
    Route::get('/', 'SympozaController@index')->name('sympoza.welcome');
    Route::get('/sso-login', 'SympozaController@sso_Login')->name('sympoza.sso-login')->middleware('cas.auth');
    Route::get('/home', 'SympozaController@home')->name('sympoza.home');

    /**
     * User Management
     */
    Route::get('/admin/user-management', 'UserController@userManagement_Admin')->name('sympoza.admin.user-management');

     /**
     * Article Submission
     */
    Route::get('/article-submission', 'UserController@articleSubmission_User')->name('sympoza.user.article-submission');
    Route::get('/article-submission/create', 'UserController@articleSubmission_Create')->name('sympoza.user.article-submission.create');
    Route::get('/article-submission/edit/{id}', 'UserController@articleSubmission_Edit')->name('sympoza.user.article-submission.edit');
    //Route::get('/article-submission/edit/{id}', 'App\Http\Livewire\Article\User\Edit');
    //Route::get(uri: '/article-submission/edit/{id}', action: Edit::class);
   });
