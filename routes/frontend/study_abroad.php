<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\study_abroad',
    'prefix' => '/study_abroad'

], function() {

	
    Route::get('', ['uses' => 'StudyAbroadController@index', 'as' => 'study_abroad.index']);

    Route::get('create', ['uses' => 'StudyAbroadController@create', 'as' => 'study_abroad.create']);

    Route::post('', ['uses' => 'StudyAbroadController@store', 'as' => 'study_abroad.store']);

    Route::get('show/{id}', ['uses' => 'StudyAbroadController@show', 'as' => 'study_abroad.show']);

    Route::get('edit/{id}', ['uses' => 'StudyAbroadController@edit', 'as' => 'study_abroad.edit']);

    Route::post('update/{id}', ['uses' => 'StudyAbroadController@update', 'as' => 'study_abroad.update']);

    Route::post('destroy/{id}', ['uses' => 'StudyAbroadController@destroy', 'as' => 'study_abroad.destroy']);
   
    
});