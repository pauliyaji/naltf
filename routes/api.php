<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Category
    Route::apiResource('categories', 'CategoryApiController');

    // Resource
    Route::post('resources/media', 'ResourceApiController@storeMedia')->name('resources.storeMedia');
    Route::apiResource('resources', 'ResourceApiController');
});
