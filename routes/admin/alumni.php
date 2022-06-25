<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Alumni',
    'prefix' => 'admin/alumni'

], function() {
    
    Route::get('', ['uses' => 'AlumniController@index', 'as' => 'admin.alumni.index']);

    Route::get('create', ['uses' => 'AlumniController@create', 'as' => 'admin.alumni.create']);

    Route::post('', ['uses' => 'AlumniController@store', 'as' => 'admin.alumni.store']);

    Route::get('show/{id}', ['uses' => 'AlumniController@show', 'as' => 'admin.alumni.show']);

    Route::get('edit/{id}', ['uses' => 'AlumniController@edit', 'as' => 'admin.alumni.edit']);

    Route::put('update/{id}', ['uses' => 'AlumniController@update', 'as' => 'admin.alumni.update']);

    Route::get('destroy/{id}', ['uses' => 'AlumniController@destroy', 'as' => 'admin.alumni.destroy']);
});