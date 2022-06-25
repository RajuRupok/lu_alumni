<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\search',
    'prefix' => '/search'

], function() {

	
    Route::post('', ['uses' => 'SearchController@search', 'as' => 'search']);
    Route::get('users', ['uses' => 'SearchController@index', 'as' => 'search.index']);
    // Route::get('create', ['uses' => 'MessagesController@create', 'as' => 'message.create']);

    // Route::post('', ['uses' => 'MessagesController@store', 'as' => 'message.store']);

    // Route::get('show/{id}', ['uses' => 'MessagesController@show', 'as' => 'message.show']);

    // Route::get('edit/{id}', ['uses' => 'MessagesController@edit', 'as' => 'message.edit']);

    // Route::post('update/{id}', ['uses' => 'MessagesController@update', 'as' => 'message.update']);

    // Route::post('destroy/{id}', ['uses' => 'MessagesController@destroy', 'as' => 'message.destroy']);
   
    
});