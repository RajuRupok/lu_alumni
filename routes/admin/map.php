<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Map',
    'prefix' => 'admin/map'

], function() {
    
    Route::get('', ['uses' => 'MapController@index', 'as' => 'admin.map.index']);

    Route::get('create', ['uses' => 'MapController@create', 'as' => 'admin.map.create']);

    Route::post('', ['uses' => 'MapController@store', 'as' => 'admin.map.store']);

    Route::get('show/{id}', ['uses' => 'MapController@show', 'as' => 'admin.map.show']);

    Route::get('edit/{id}', ['uses' => 'MapController@edit', 'as' => 'admin.map.edit']);

    Route::put('update/{id}', ['uses' => 'MapController@update', 'as' => 'admin.map.update']);

    Route::post('destroy/{id}', ['uses' => 'MapController@destroy', 'as' => 'admin.map.destroy']);
});