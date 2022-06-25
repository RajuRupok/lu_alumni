<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\about',
    'prefix' => '/about'

], function() {

	
    Route::get('', ['uses' => 'AboutController@index', 'as' => 'about.index']);

    Route::get('create', ['uses' => 'AboutController@create', 'as' => 'about.create']);

    Route::post('', ['uses' => 'AboutController@store', 'as' => 'about.store']);

    Route::get('show/{id}', ['uses' => 'AboutController@show', 'as' => 'about.show']);

    Route::get('edit/{id}', ['uses' => 'AboutController@edit', 'as' => 'about.edit']);

    Route::post('update/{id}', ['uses' => 'AboutController@update', 'as' => 'about.update']);

    Route::post('destroy/{id}', ['uses' => 'AboutController@destroy', 'as' => 'about.destroy']);
   
    
});