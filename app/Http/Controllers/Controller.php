<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    public function __construct()
    {
        $user = Session::get('user', null);
        View::share('user', $user);
        $cart = Session::get('cart', []);
        View::share('cart', $cart);
    }
}
