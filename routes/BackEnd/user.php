<?php



Route::group([
//    'middleware' => 'acl',
    'namespace' => 'BackEnd\User',
    'prefix' => '/user'

], function() {

    Route::resource('', 'UserContrller');
    
    
    
});