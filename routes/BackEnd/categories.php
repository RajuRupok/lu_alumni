<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'BackEnd\Categories',
    'prefix' => '/categories'

], function() {

	// Route::get('categories', 'CategoriesContrller@Index');

    // Route::resource('', 'CategoriesContrller');
    
    Route::get('', ['uses' => 'CategoriesContrller@index', 'as' => 'categories.index']);

    Route::get('create', ['uses' => 'CategoriesContrller@create', 'as' => 'categories.create']);

    Route::post('', ['uses' => 'CategoriesContrller@store', 'as' => 'categories.store']);

    Route::get('show/{id}', ['uses' => 'CategoriesContrller@show', 'as' => 'categories.show']);

    Route::get('edit/{id}', ['uses' => 'CategoriesContrller@edit', 'as' => 'categories.edit']);

    Route::put('update/{id}', ['uses' => 'CategoriesContrller@update', 'as' => 'categories.update']);

    Route::post('destroy/{id}', ['uses' => 'CategoriesContrller@destroy', 'as' => 'categories.destroy']);
    
});