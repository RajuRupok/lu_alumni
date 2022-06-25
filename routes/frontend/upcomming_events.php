<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\upcomming_events',
    'prefix' => '/upcomming_events'

], function() {

	
    Route::get('', ['uses' => 'UpcommingEventsController@index', 'as' => 'upcomming_events.index']);

    Route::get('create', ['uses' => 'UpcommingEventsController@create', 'as' => 'upcomming_events.create']);

    Route::post('', ['uses' => 'UpcommingEventsController@store', 'as' => 'upcomming_events.store']);

    Route::get('show/{id}', ['uses' => 'UpcommingEventsController@show', 'as' => 'upcomming_events.show']);

    Route::get('edit/{id}', ['uses' => 'UpcommingEventsController@edit', 'as' => 'upcomming_events.edit']);

    Route::post('update/{id}', ['uses' => 'UpcommingEventsController@update', 'as' => 'upcomming_events.update']);

    Route::post('destroy/{id}', ['uses' => 'UpcommingEventsController@destroy', 'as' => 'upcomming_events.destroy']);
   
    
});