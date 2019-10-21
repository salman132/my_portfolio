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

Route::get('/', 'FrontEndController@index')->name('home');

Route::post('contact/store',[
    'uses'=>'FrontEndController@store',
    'as'=>'contact.store'
]);

Auth::routes([
    'register' => false
]);


Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){

    Route::get('dashboard',[
        'uses'=>'UsersController@index',
        'as'=>'admin'
    ]);
    Route::get('application/settings',[
        'uses'=>'SettingsController@index',
        'as'=> 'settings'
    ]);
    Route::post('settings/store',[
        'uses'=> 'SettingsController@store',
        'as'=> 'settings.store'
    ]);
    Route::post('settings/update/{id}',[
        'uses'=> 'SettingsController@update',
        'as'=> 'settings.update'
    ]);
    Route::get('skills',[
        'uses'=> 'UsersController@create',
        'as'=> 'skills'
    ]);
    Route::post('skills/store',[
        'uses'=> 'UsersController@store',
        'as'=> 'skills.store'
    ]);
    Route::get('skill/delete/{id}',[
        'uses'=>'UsersController@destroy',
        'as'=>'skill.delete'
    ]);
    Route::post('category/store',[
        'uses'=>'SettingsController@create',
        'as'=> 'category.store'
    ]);
    Route::get('category/delete/{id}',[
        'uses'=> 'SettingsController@destroy',
        'as'=> 'category.delete'
    ]);
    Route::get('faq',[
        'uses'=>'FaqsController@index',
        'as'=>'faq'
    ]);
    Route::post('faq/store',[
        'uses'=> 'FaqsController@store',
        'as'=> 'faq.store'
    ]);
    Route::get('faq/destory/{id}',[
        'uses'=> 'FaqsController@destroy',
        'as'=>'faq.destroy'
    ]);
    Route::get('services',[
        'uses'=> 'ServicesController@index',
        'as'=> 'services'
    ]);
    Route::post('service/store',[
        'uses'=> 'ServicesController@store',
        'as'=> 'service.store'
    ]);
    Route::get('service/delete/{id}',[
        'uses'=>'ServicesController@destroy',
        'as'=>'service.delete'
    ]);
    Route::get('service/show/{id}',[
        'uses'=>'ServicesController@show',
        'as'=>'service.show'
    ]);
    Route::post('service/update/{id}',[
        'uses'=>'ServicesController@update',
        'as'=> 'service.update'
    ]);
    Route::get('about',[
        'uses'=> 'UsersController@about',
        'as'=> 'about'
    ]);
    Route::get('about',[
        'uses'=>'AboutsController@index',
        'as'=>'about'
    ]);
    Route::post('about/store',[
        'uses'=>'AboutsController@store',
        'as'=>'about.store'
    ]);
    Route::get('about/delete/{id}',[
        'uses'=>'AboutsController@destroy',
        'as'=>'about.delete'
    ]);
    Route::get('about/show/{id}',[
        'uses'=> 'AboutsController@show',
        'as'=>'about.show'

    ]);
    Route::post('about/update/{id}',[
        'uses'=> 'AboutsController@update',
        'as'=> 'about.update'
    ]);
    Route::get('mail',[
        'uses'=>'MailsController@index',
        'as'=>'mail'
    ]);
    Route::get('mail/read/{id}',[
        'uses'=> 'MailsController@read',
        'as'=> 'mail.read'
    ]);
    Route::get('mail/delete/{id}',[
        'uses'=> 'MailsController@destroy',
        'as'=> 'mail.delete'
    ]);
    Route::post('mail/reply',[
        'uses'=> 'MailsController@store',
        'as'=>'mail.reply'
    ]);



    Route::get('add/projects',[
        'uses'=>'ProjectsController@index',
        'as'=>'projects'
    ]);
    Route::post('store/project',[
        'uses'=> 'ProjectsController@store',
        'as'=>'project.store'
    ]);
    Route::get('project/edit/{id}',[
        'uses'=>'ProjectsController@edit',
        'as'=>'project.edit'
    ]);
    Route::get('project/delete/{id}',[
        'uses'=>'ProjectsController@destroy',
        'as'=>'project.delete'
    ]);


});






