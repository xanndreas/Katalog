<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Settings
    Route::apiResource('settings', 'SettingsApiController');

    // Galleries
    Route::post('galleries/media', 'GalleriesApiController@storeMedia')->name('galleries.storeMedia');
    Route::apiResource('galleries', 'GalleriesApiController');

    // Faqs
    Route::apiResource('faqs', 'FaqsApiController');

    // Teachers
    Route::apiResource('teachers', 'TeacherApiController');

    // Rooms
    Route::apiResource('rooms', 'RoomApiController');

    // Schedules
    Route::apiResource('schedules', 'ScheduleApiController');

    // Buildings
    Route::post('buildings/media', 'BuildingApiController@storeMedia')->name('buildings.storeMedia');
    Route::apiResource('buildings', 'BuildingApiController');
});
