<?php

Route::group(['midleware' => 'web'], function() {
    Route::get('/', "HomeController@index");
    Route::get('/comochegar', "HomeController@comochegar");

    Route::auth();
});
/* rotas autenticadas */
Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    Route::get('/proxy', function () {
        return view('proxy');
    });
    Route::post('image/upload', ['as' => 'image.upload', 'uses' => 'AdminUsersController@addImage']);
    Route::get("user/profile/{id?}", "AdminUsersController@profile");
    Route::get("users", "AdminUsersController@users");
    Route::put("user/profile", ['as' => 'user.profile', 'uses' => "AdminUsersController@profileUpdate"]);
    Route::get("user/profile/edit/{id}", ['as' => 'user.profile.edit', 'uses' => "AdminUsersController@profileEdit"]);

    });

