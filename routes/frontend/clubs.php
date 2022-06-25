<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\clubs',
    'prefix' => '/clubs'

], function() {

	
    Route::get('', ['uses' => 'ClubsController@index', 'as' => 'clubs.index']);

    Route::get('create', ['uses' => 'ClubsController@create', 'as' => 'clubs.create']);

    Route::post('', ['uses' => 'ClubsController@store', 'as' => 'clubs.store']);

    Route::get('show/{id}', ['uses' => 'ClubsController@show', 'as' => 'clubs.show']);

    Route::get('edit/{id}', ['uses' => 'ClubsController@edit', 'as' => 'clubs.edit']);

    Route::post('update/{id}', ['uses' => 'ClubsController@update', 'as' => 'clubs.update']);

    Route::post('destroy/{id}', ['uses' => 'ClubsController@destroy', 'as' => 'clubs.destroy']);
   
    
});