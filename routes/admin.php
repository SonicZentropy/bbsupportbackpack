<?php

// Backpack\CRUD: Define the resources for the entities you want to CRUD.

Route::group([
    //'prefix' => config('backpack.base.route_prefix', ''),
    'middleware' => ['admin', 'role:Admin,AddSessions'],

], function() {
    CRUD::resource('session', 'TrainingSessionCrudController');
    CRUD::resource('user', 'UserCrudController');
    CRUD::resource('registrations', 'TrainingRegistrationCrudController');
    CRUD::resource('viewcertifications', 'ViewCertificationsController');


});

Route::group([
    'middleware' => ['admin', 'role:Viewer,ViewCompletions'],
], function() {
    CRUD::resource('viewcertifications', 'ViewCertificationsController');


});

Route::group([
    //'prefix' => config('backpack.base.route_prefix', ''),
    'middleware' => ['admin', 'role:SuperAdmin,AddSessions'],

], function() {

    CRUD::resource('userroles', 'RolesPermissionsCrudController');


});

//$router->group(['namespace' => 'Backpack\PermissionManager\app\Http\Controllers'], function ($router) {
//    Route::group(['namespace' => 'Backpack\PermissionManager\app\Http\Controllers', 'middleware' => ['web', 'admin']], function () {
//        \CRUD::resource('permission', 'PermissionCrudController');
//        \CRUD::resource('role', 'RoleCrudController');
//        \CRUD::resource('user', 'UserCrudController');
//    });
//});