<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\user_profile',
    'prefix' => '/user_profile'

], function() {

	
    Route::get('', ['uses' => 'UserProfileController@index', 'as' => 'user_profile.index']);

    Route::get('create', ['uses' => 'UserProfileController@create', 'as' => 'user_profile.create']);

    Route::post('', ['uses' => 'UserProfileController@store', 'as' => 'user_profile.store']);

    Route::get('show/{id}', ['uses' => 'UserProfileController@show', 'as' => 'user_profile.show']);

    Route::get('edit/{id}', ['uses' => 'UserProfileController@edit', 'as' => 'user_profile.edit']);

    Route::post('update/{id}', ['uses' => 'UserProfileController@update', 'as' => 'user_profile.update']);

    Route::post('destroy/{id}', ['uses' => 'UserProfileController@destroy', 'as' => 'user_profile.destroy']);
   
    
});