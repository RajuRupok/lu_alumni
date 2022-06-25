<?php



Route::group([
//    'middleware' => 'acl',
    'namespace' => 'BackEnd\Clubs',
    'prefix' => '/clubs'

], function() {

    // Route::resource('', 'ClubsContrller');
    
    Route::get('', ['uses' => 'ClubsContrller@index', 'as' => 'clubs.index']);

    Route::get('create', ['uses' => 'ClubsContrller@create', 'as' => 'clubs.create']);

    Route::post('', ['uses' => 'ClubsContrller@store', 'as' => 'clubs.store']);

    Route::get('show/{id}', ['uses' => 'ClubsContrller@show', 'as' => 'clubs.show']);

    Route::get('edit/{id}', ['uses' => 'ClubsContrller@edit', 'as' => 'clubs.edit']);

    Route::put('update/{id}', ['uses' => 'ClubsContrller@update', 'as' => 'clubs.update']);

    Route::post('destroy/{id}', ['uses' => 'ClubsContrller@destroy', 'as' => 'clubs.destroy']);
    
});