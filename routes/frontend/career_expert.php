<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\career_expert',
    'prefix' => '/career_expert'

], function() {

	
    Route::get('', ['uses' => 'CareerExpertController@index', 'as' => 'career_expert.index']);

    Route::get('create', ['uses' => 'CareerExpertController@create', 'as' => 'career_expert.create']);

    Route::post('', ['uses' => 'CareerExpertController@store', 'as' => 'career_expert.store']);

    Route::get('show/{id}', ['uses' => 'CareerExpertController@show', 'as' => 'career_expert.show']);

    Route::get('edit/{id}', ['uses' => 'CareerExpertController@edit', 'as' => 'career_expert.edit']);

    Route::post('update/{id}', ['uses' => 'CareerExpertController@update', 'as' => 'career_expert.update']);

    Route::post('destroy/{id}', ['uses' => 'CareerExpertController@destroy', 'as' => 'career_expert.destroy']);
   
    
});