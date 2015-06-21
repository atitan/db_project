<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller {

    public function index()
    {
    	$products = DB::select('select * from products');
    	// var_dump($products);
        return view('welcome', ['products' => $products]);
    }

}
