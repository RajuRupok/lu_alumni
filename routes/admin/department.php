<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Departments',
    'prefix' => 'admin/departments'

], function() {
    
    Route::get('', ['uses' => 'DepartmentsController@index', 'as' => 'admin.departments.index']);

    Route::get('create', ['uses' => 'DepartmentsController@create', 'as' => 'admin.departments.create']);

    Route::post('create', ['uses' => 'DepartmentsController@store', 'as' => 'admin.departments.store']);

    Route::get('show/{id}', ['uses' => 'DepartmentsController@show', 'as' => 'admin.departments.show']);

    Route::get('edit/{id}', ['uses' => 'DepartmentsController@edit', 'as' => 'admin.departments.edit']);

    Route::put('update/{id}', ['uses' => 'DepartmentsController@update', 'as' => 'admin.departments.update']);

    Route::get('destroy/{id}', ['uses' => 'DepartmentsController@destroy', 'as' => 'admin.departments.destroy']);
});