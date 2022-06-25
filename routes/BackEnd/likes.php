<?php



Route::group([
//    'middleware' => 'acl',
    'namespace' => 'BackEnd\Likes',
    'prefix' => '/likes'

], function() {

    // Route::resource('', 'LikesContrller');
    
    Route::get('', ['uses' => 'LikesContrller@index', 'as' => 'likes.index']);

    Route::get('create', ['uses' => 'LikesContrller@create', 'as' => 'likes.create']);

    Route::get('{id}', ['uses' => 'LikesContrller@store', 'as' => 'likes.store']);

    Route::get('show/{id}', ['uses' => 'LikesContrller@show', 'as' => 'likes.show']);

    Route::get('edit/{id}', ['uses' => 'LikesContrller@edit', 'as' => 'likes.edit']);

    Route::put('update/{id}', ['uses' => 'LikesContrller@update', 'as' => 'likes.update']);

    Route::get('destroy/{id}', ['uses' => 'LikesContrller@destroy', 'as' => 'likes.destroy']);
    
});