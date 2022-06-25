<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\volunteers',
    'prefix' => '/volunteers'

], function() {

	
    Route::get('', ['uses' => 'VolunteersController@index', 'as' => 'volunteers.index']);

    Route::get('create', ['uses' => 'VolunteersController@create', 'as' => 'volunteers.create']);

    Route::post('', ['uses' => 'VolunteersController@store', 'as' => 'volunteers.store']);

    Route::get('show/{id}', ['uses' => 'VolunteersController@show', 'as' => 'volunteers.show']);

    Route::get('edit/{id}', ['uses' => 'VolunteersController@edit', 'as' => 'volunteers.edit']);

    Route::post('update/{id}', ['uses' => 'VolunteersController@update', 'as' => 'volunteers.update']);

    Route::post('destroy/{id}', ['uses' => 'VolunteersController@destroy', 'as' => 'volunteers.destroy']);
   
    
});