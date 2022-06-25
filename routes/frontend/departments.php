<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\departments',
    'prefix' => '/departments'

], function() {

	
    
    Route::get('', ['uses' => 'Departments@index', 'as' => 'departments.index']);

   
    
});