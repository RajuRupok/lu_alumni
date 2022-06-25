<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\general_advice',
    'prefix' => '/general_advice'

], function() {

	
    Route::get('', ['uses' => 'GeneralAdviceController@index', 'as' => 'general_advice.index']);

    Route::get('create', ['uses' => 'GeneralAdviceController@create', 'as' => 'general_advice.create']);

    Route::post('', ['uses' => 'GeneralAdviceController@store', 'as' => 'general_advice.store']);

    Route::get('show/{id}', ['uses' => 'GeneralAdviceController@show', 'as' => 'general_advice.show']);

    Route::get('edit/{id}', ['uses' => 'GeneralAdviceController@edit', 'as' => 'general_advice.edit']);

    Route::post('update/{id}', ['uses' => 'GeneralAdviceController@update', 'as' => 'general_advice.update']);

    Route::post('destroy/{id}', ['uses' => 'GeneralAdviceController@destroy', 'as' => 'general_advice.destroy']);
   
    
});