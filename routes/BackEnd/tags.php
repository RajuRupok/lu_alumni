<?php



Route::group([
//    'middleware' => 'acl',
    'namespace' => 'BackEnd\Tags',
    'prefix' => '/tags'

], function() {

    // Route::resource('', 'TagsContrller');
    
    Route::get('', ['uses' => 'TagsContrller@index', 'as' => 'tags.index']);

    Route::get('create', ['uses' => 'TagsContrller@create', 'as' => 'tags.create']);

    Route::post('', ['uses' => 'TagsContrller@store', 'as' => 'tags.store']);

    Route::get('show/{id}', ['uses' => 'TagsContrller@show', 'as' => 'tags.show']);

    Route::get('edit/{id}', ['uses' => 'TagsContrller@edit', 'as' => 'tags.edit']);

    Route::put('update/{id}', ['uses' => 'TagsContrller@update', 'as' => 'tags.update']);

    Route::post('destroy/{id}', ['uses' => 'TagsContrller@destroy', 'as' => 'tags.destroy']);
    
});