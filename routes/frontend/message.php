<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\message',
    'prefix' => '/message'

], function() {

	
    Route::get('', ['uses' => 'MessagesController@index', 'as' => 'message.index']);

    Route::get('contacts', ['uses' => 'ContactsController@get', 'as' => 'contact.get']);
    Route::get('conversation/{id}', ['uses' => 'ContactsController@getMessagesFor', 'as' => 'contact.get']);
    Route::post('conversation/send', 'ContactsController@send');

    // Route::get('create', ['uses' => 'MessagesController@create', 'as' => 'message.create']);

    // Route::post('', ['uses' => 'MessagesController@store', 'as' => 'message.store']);

    // Route::get('show/{id}', ['uses' => 'MessagesController@show', 'as' => 'message.show']);

    // Route::get('edit/{id}', ['uses' => 'MessagesController@edit', 'as' => 'message.edit']);

    // Route::post('update/{id}', ['uses' => 'MessagesController@update', 'as' => 'message.update']);

    // Route::post('destroy/{id}', ['uses' => 'MessagesController@destroy', 'as' => 'message.destroy']);
   
    
});