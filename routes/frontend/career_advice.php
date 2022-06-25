<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'frontend\career_advice',
    'prefix' => '/career_advice'

], function() {

	
    
    Route::get('', ['uses' => 'CareerAdviceController@index', 'as' => 'career_advice.index']);
    Route::get('/show/{id}', ['uses' => 'CareerAdviceController@show', 'as' => 'career_advice.show']);
    Route::post('/update/{id}', ['uses' => 'CareerAdviceController@update', 'as' => 'career_advice.show']);

   
    
});