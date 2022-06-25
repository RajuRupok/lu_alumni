<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\success_stories',
    'prefix' => '/success_stories'

], function() {

	
    Route::get('', ['uses' => 'SuccessStoriesController@index', 'as' => 'success_stories.index']);

    Route::get('create', ['uses' => 'SuccessStoriesController@create', 'as' => 'success_stories.create']);

    Route::post('', ['uses' => 'SuccessStoriesController@store', 'as' => 'success_stories.store']);

    Route::get('show/{id}', ['uses' => 'SuccessStoriesController@show', 'as' => 'success_stories.show']);

    Route::get('edit/{id}', ['uses' => 'SuccessStoriesController@edit', 'as' => 'success_stories.edit']);

    Route::post('update/{id}', ['uses' => 'SuccessStoriesController@update', 'as' => 'success_stories.update']);

    Route::post('destroy/{id}', ['uses' => 'SuccessStoriesController@destroy', 'as' => 'success_stories.destroy']);
   
    
});