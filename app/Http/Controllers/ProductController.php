<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

    public function index()
    {
        $products = DB::select('select * from products');
        return view('products', ['products' => $products]);
    }

}
