<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Admin_auth',
    'prefix' => 'admin'

], function() {
    
    
    Route::get('/login', ['uses' => 'AdminLoginController@showLoginForm', 'as' => 'admin.index']);
    Route::post('/login', ['uses' => 'AdminLoginController@login', 'as' => 'admin.login']);


    // Route::get('/register', ['uses' => 'RegisterController@showRegistrationForm', 'as' => 'admin.register']);
    // Route::post('/register', ['uses' => 'RegisterController@login', 'as' => 'admin.register']);

    // Route::get('/admin-password/reset', ['uses' => 'ForgotPasswordController@showLinkRequestForm', 'as' => 'admin.password.request']);
    // Route::post('/admin-password/email', ['uses' => 'ForgotPasswordController@sendResetLinkEmail', 'as' => 'admin.password.email']);

    // Route::get('/admin-password/reset', ['uses' => 'ResetPasswordController@reset', 'as' => 'admin.password.update']);
    // Route::post('/admin-password/reset/{token}', ['uses' => 'ResetPasswordController@showResetForm', 'as' => 'admin.password.reset']);

});