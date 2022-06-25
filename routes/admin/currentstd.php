<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\CurrentStd',
    'prefix' => 'admin/currentstudent'

], function() {
    
    Route::get('', ['uses' => 'CurrentStdController@index', 'as' => 'admin.currentstd.index']);

    Route::get('create', ['uses' => 'CurrentStdController@create', 'as' => 'admin.currentstd.create']);

    Route::post('', ['uses' => 'CurrentStdController@store', 'as' => 'admin.currentstd.store']);

    Route::get('show/{id}', ['uses' => 'CurrentStdController@show', 'as' => 'admin.currentstd.show']);

    Route::get('edit/{id}', ['uses' => 'CurrentStdController@edit', 'as' => 'admin.currentstd.edit']);

    Route::put('update/{id}', ['uses' => 'CurrentStdController@update', 'as' => 'admin.currentstd.update']);

    Route::post('destroy/{id}', ['uses' => 'CurrentStdController@destroy', 'as' => 'admin.currentstd.destroy']);
});