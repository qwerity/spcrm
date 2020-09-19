<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Services
    Route::apiResource('services', 'ServicesApiController', ['except' => ['destroy']]);

    // Payments
    Route::apiResource('payments', 'PaymentsApiController');

    // Clients
    Route::apiResource('clients', 'ClientsApiController');
});
