<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OrderController extends Controller {

    public function index()
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function update($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function destroy($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

}
