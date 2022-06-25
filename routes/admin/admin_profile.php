<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Profile',
    'prefix' => 'admin/profile'

], function() {
    
    Route::get('', ['uses' => 'ProfileController@index', 'as' => 'admin.profile.index']);

    Route::get('create', ['uses' => 'ProfileController@create', 'as' => 'admin.profile.create']);

    Route::post('', ['uses' => 'ProfileController@store', 'as' => 'admin.profile.store']);

    Route::post('/{id}', ['uses' => 'ProfileController@imageStore', 'as' => 'admin.profile.imagestore']);

    Route::get('show/{id}', ['uses' => 'ProfileController@show', 'as' => 'admin.profile.show']);

    Route::get('edit/{id}', ['uses' => 'ProfileController@edit', 'as' => 'admin.profile.edit']);

    Route::post('update/{id}', ['uses' => 'ProfileController@update', 'as' => 'admin.profile.update']);

    Route::post('destroy/{id}', ['uses' => 'ProfileController@destroy', 'as' => 'admin.profile.destroy']);
});