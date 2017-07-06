<?php

// Backpack\CRUD: Define the resources for the entities you want to CRUD.

Route::group([
    //'prefix' => config('backpack.base.route_prefix', ''),
    'middleware' => ['admin'],

], function() {
    CRUD::resource('session', 'TrainingSessionCrudController');
    CRUD::resource('user', 'UserCrudController');
    CRUD::resource('registrations', 'TrainingRegistrationCrudController');
    CRUD::resource('userroles', 'RolesPermissionsCrudController');


});