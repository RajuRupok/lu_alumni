<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\successfull_events',
    'prefix' => '/successfull_events'

], function() {

	
    Route::get('', ['uses' => 'SuccessfullEventsController@index', 'as' => 'successfull_events.index']);

    Route::get('create', ['uses' => 'SuccessfullEventsController@create', 'as' => 'successfull_events.create']);

    Route::post('', ['uses' => 'SuccessfullEventsController@store', 'as' => 'successfull_events.store']);

    Route::get('show/{id}', ['uses' => 'SuccessfullEventsController@show', 'as' => 'successfull_events.show']);

    Route::get('edit/{id}', ['uses' => 'SuccessfullEventsController@edit', 'as' => 'successfull_events.edit']);

    Route::post('update/{id}', ['uses' => 'SuccessfullEventsController@update', 'as' => 'successfull_events.update']);

    Route::post('destroy/{id}', ['uses' => 'SuccessfullEventsController@destroy', 'as' => 'successfull_events.destroy']);
   
    
});