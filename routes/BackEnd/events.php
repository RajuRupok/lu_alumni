<?php



Route::group([
//    'middleware' => 'acl',
    'namespace' => 'BackEnd\Events',
    'prefix' => '/events'

], function() {

    // Route::resource('', 'EventsContrller');
    
    Route::get('', ['uses' => 'EventsContrller@index', 'as' => 'events.index']);

    Route::get('create', ['uses' => 'EventsContrller@create', 'as' => 'events.create']);

    Route::post('', ['uses' => 'EventsContrller@store', 'as' => 'events.store']);

    Route::get('show/{id}', ['uses' => 'EventsContrller@show', 'as' => 'events.show']);

    Route::get('edit/{id}', ['uses' => 'EventsContrller@edit', 'as' => 'events.edit']);

    Route::put('update/{id}', ['uses' => 'EventsContrller@update', 'as' => 'events.update']);

    Route::post('destroy/{id}', ['uses' => 'EventsContrller@destroy', 'as' => 'events.destroy']);
    
});