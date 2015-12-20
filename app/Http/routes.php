<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "PagesController@index");
Route::post('/signup', 'SignupController@store');
Route::get('/signup/thankyou', 'SignupController@thankyou');

// Admin area
$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function() {
    get('admin', 'DashboardController@index');
    resource('admin/subscribers', 'SubscriberController');
    resource('admin/campaigns', 'CampaignController');
    resource('admin/messages', 'MessagesController');
    post('admin/subscribers/import', 'SubscriberController@import');
    get('admin/settings', 'SettingsController@index');
    get('admin/search/{entity}/{$query}', 'SearchController@show');
});


// Authentication routes
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');