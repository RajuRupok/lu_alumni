<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Clubs',
    'prefix' => 'admin/clubs'

], function() {

	// Route::get('categories', 'CategoriesContrller@Index');

    // Route::resource('', 'CategoriesContrller');
    
    Route::get('', ['uses' => 'ClubController@index', 'as' => 'admin.club.index']);

    Route::get('create', ['uses' => 'ClubController@create', 'as' => 'admin.club.create']);

    Route::post('', ['uses' => 'ClubController@store', 'as' => 'admin.club.store']);

    Route::get('show/{id}', ['uses' => 'ClubController@show', 'as' => 'admin.club.show']);

    Route::get('edit/{id}', ['uses' => 'ClubController@edit', 'as' => 'admin.club.edit']);

    Route::put('update/{id}', ['uses' => 'ClubController@update', 'as' => 'admin.club.update']);

    Route::get('destroy/{id}', ['uses' => 'ClubController@destroy', 'as' => 'admin.club.destroy']);
    
});