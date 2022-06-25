<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Notifications',
    'prefix' => 'admin/notifications'

], function() {
    
    Route::get('', ['uses' => 'NotificationsController@index', 'as' => 'admin.notifications.index']);

    Route::get('create', ['uses' => 'NotificationsController@create', 'as' => 'admin.notifications.create']);

    Route::post('', ['uses' => 'NotificationsController@store', 'as' => 'admin.notifications.store']);

    Route::get('show/{id}', ['uses' => 'NotificationsController@show', 'as' => 'admin.notifications.show']);

    Route::get('edit/{id}', ['uses' => 'NotificationsController@edit', 'as' => 'admin.notifications.edit']);

    Route::put('update/{id}', ['uses' => 'NotificationsController@update', 'as' => 'admin.notifications.update']);

    Route::post('destroy/{id}', ['uses' => 'NotificationsController@destroy', 'as' => 'admin.notifications.destroy']);
});