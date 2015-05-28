<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller {

    public function index($page)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

}
