<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Dashboard',
    'prefix' => 'admin/dashboard'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/',  'DashboardController@index')->name('admin.dashboard.index');

    Route::get('/create', ['uses' => 'DashboardController@create', 'as' => 'admin.dashboard.create']);

    Route::post('', ['uses' => 'DashboardController@store', 'as' => 'admin.dashboard.store']);

    Route::get('/show/{id}', ['uses' => 'DashboardController@show', 'as' => 'admin.dashboard.show']);

    Route::get('/edit/{id}', ['uses' => 'DashboardController@edit', 'as' => 'admin.dashboard.edit']);

    Route::put('/update/{id}', ['uses' => 'DashboardController@update', 'as' => 'admin.dashboard.update']);

    Route::post('/destroy/{id}', ['uses' => 'DashboardController@destroy', 'as' => 'admin.dashboard.destroy']);
});