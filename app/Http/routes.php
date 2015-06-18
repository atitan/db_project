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

$app->get('/', ['uses' => 'App\Http\Controllers\WelcomeController@index', 'as' => 'root_index']);

$app->get('/products', ['uses' => 'App\Http\Controllers\ProductController@index', 'as' => 'product_index']);

$app->group(['prefix' => 'user'], function($app)
{
	$app->get('login', ['uses' => 'App\Http\Controllers\UserController@loginPage', 'as' => 'user_login_page']);
	$app->post('login', ['uses' => 'App\Http\Controllers\UserController@login', 'as' => 'user_login_login']);
	$app->get('signup', ['uses' => 'App\Http\Controllers\UserController@signupPage', 'as' => 'user_signup_page']);
	$app->post('signup', ['uses' => 'App\Http\Controllers\UserController@signup', 'as' => 'user_signup_signup']);
	$app->delete('logout', ['uses' => 'App\Http\Controllers\UserController@logout', 'as' => 'user_login_delete']);
});

// Login needed
$app->group(['middleware' => 'auth'], function($app)
{
    $app->get('/orders', ['uses' => 'App\Http\Controllers\OrderController@index', 'as' => 'order_index']);
    $app->get('/orders/{id}', ['uses' => 'App\Http\Controllers\OrderController@show', 'as' => 'order_show']);
    $app->post('/orders', ['uses' => 'App\Http\Controllers\OrderController@create', 'as' => 'order_create']);
    $app->put('/orders/{id}', ['uses' => 'App\Http\Controllers\OrderController@update', 'as' => 'order_update']);
    $app->delete('/orders/{id}', ['uses' => 'App\Http\Controllers\OrderController@destroy', 'as' => 'order_destroy']);

    $app->post('/cart/add', ['uses' => 'App\Http\Controllers\OrderController@cartAdd', 'as' => 'cart_add']);
    $app->get('/cart', ['uses' => 'App\Http\Controllers\OrderController@cartReview', 'as' => 'cart_review']);

    $app->get('/me', ['uses' => 'App\Http\Controllers\UserController@show', 'as' => 'user_me_show']);
    $app->put('/me', ['uses' => 'App\Http\Controllers\UserController@update', 'as' => 'user_me_update']);

	// Admin zone
	$app->group(['prefix' => 'admin', 'middleware' => 'admin'], function($app)
	{
		$app->get('products', ['uses' => 'App\Http\Controllers\Admin\ProductController@index', 'as' => 'admin_product_index']);
        $app->post('products', ['uses' => 'App\Http\Controllers\Admin\ProductController@create', 'as' => 'admin_product_create']);
		$app->put('products/{id}', ['uses' => 'App\Http\Controllers\Admin\ProductController@update', 'as' => 'admin_product_update']);
		$app->delete('products/{id}', ['uses' => 'App\Http\Controllers\Admin\ProductController@destroy', 'as' => 'admin_product_destroy']);

		$app->get('orders', ['uses' => 'App\Http\Controllers\Admin\OrderController@index', 'as' => 'admin_order_index']);
		$app->get('orders/{id}', ['uses' => 'App\Http\Controllers\Admin\OrderController@show', 'as' => 'admin_order_show']);
		$app->put('orders/{id}', ['uses' => 'App\Http\Controllers\Admin\OrderController@update', 'as' => 'admin_order_update']);
		$app->delete('orders/{id}', ['uses' => 'App\Http\Controllers\Admin\OrderController@destroy', 'as' => 'admin_order_destroy']);
	});
});
