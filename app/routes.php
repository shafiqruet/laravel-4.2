<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('about', function(){
	return View::make('about')->with('number_of_cats', 9000);
});

Route::get('/', array('uses'=>'AuthorsController@login'));


Route::get('authors', array('as'=>'authors_list','uses'=>'AuthorsController@index'));
Route::get('authors/newAuthor', array('as'=>'new_author','uses'=>'AuthorsController@newAuthor'));
Route::post('authors/saveAuthor', array('as'=>'save_author','uses'=>'AuthorsController@saveAuthor'));
Route::get('authors/updateAuthor', array('as'=>'update_author','uses'=>'AuthorsController@updateAuthor'));
Route::get('authors/{id}', array('as'=>'author','uses'=>'AuthorsController@view'))->where('id', '[0-9]+');
Route::post('authors/saveinfo', array('as'=>'save_info','uses'=>'AuthorsController@saveinfo'));
Route::get('authors/deleteAuthor', array('as'=>'delete_author','uses'=>'AuthorsController@deleteAuthor'));
Route::post('authors/loginAuthor', array('as'=>'loginAuthor','uses'=>'AuthorsController@loginAuthor'));
Route::get('authors/logout', array('as'=>'logout_author','uses'=>'AuthorsController@logout'));


