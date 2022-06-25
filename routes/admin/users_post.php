<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\UsersPost',
    'prefix' => 'admin/userspost'

], function() {
    
    Route::get('', ['uses' => 'UsersPostController@index', 'as' => 'admin.userspost.index']);

    Route::get('create', ['uses' => 'UsersPostController@create', 'as' => 'admin.userspost.create']);

    Route::post('', ['uses' => 'UsersPostController@store', 'as' => 'admin.userspost.store']);

    Route::get('show/{id}', ['uses' => 'UsersPostController@show', 'as' => 'admin.userspost.show']);

    Route::get('edit/{id}', ['uses' => 'UsersPostController@edit', 'as' => 'admin.userspost.edit']);

    Route::put('update/{id}', ['uses' => 'UsersPostController@update', 'as' => 'admin.userspost.update']);

    Route::get('destroy/{id}', ['uses' => 'UsersPostController@destroy', 'as' => 'admin.userspost.destroy']);
});