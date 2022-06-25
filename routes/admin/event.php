<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Events',
    'prefix' => 'admin/events'

], function() {
    
    Route::get('', ['uses' => 'EventsController@index', 'as' => 'admin.events.index']);

    Route::get('create', ['uses' => 'EventsController@create', 'as' => 'admin.events.create']);

    Route::post('', ['uses' => 'EventsController@store', 'as' => 'admin.events.store']);

    Route::get('show/{id}', ['uses' => 'EventsController@show', 'as' => 'admin.events.show']);

    Route::get('edit/{id}', ['uses' => 'EventsController@edit', 'as' => 'admin.events.edit']);

    Route::put('update/{id}', ['uses' => 'EventsController@update', 'as' => 'admin.events.update']);

    Route::get('destroy/{id}', ['uses' => 'EventsController@destroy', 'as' => 'admin.events.destroy']);
});