<?php



Route::group([
//    'middleware' => 'acl',
    'namespace' => 'BackEnd\Comments',
    'prefix' => '/comments'

], function() {

    // Route::resource('', 'CommentsContrller');
    
    Route::get('', ['uses' => 'CommentsContrller@index', 'as' => 'comments.index']);

    Route::get('create', ['uses' => 'CommentsContrller@create', 'as' => 'comments.create']);

    Route::post('/{id}', ['uses' => 'CommentsContrller@store', 'as' => 'comments.store']);

    Route::get('show/{id}', ['uses' => 'CommentsContrller@show', 'as' => 'comments.show']);

    Route::get('edit/{id}', ['uses' => 'CommentsContrller@edit', 'as' => 'comments.edit']);

    Route::put('update/{id}', ['uses' => 'CommentsContrller@update', 'as' => 'comments.update']);

    Route::get('destroy/{id}', ['uses' => 'CommentsContrller@destroy', 'as' => 'comments.destroy']);
    
});