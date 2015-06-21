<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

    public function index()
    {
        $products = DB::select('select * from products');
        return view('admin.products', ['products' => $products]);
    }

    public function create(Request $req)
    {
        $product = DB::insert(
            'insert into products (name, price, availability, description, img_path, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?)',
            [$req->input('name'), intval($req->input('price')), intval($req->input('availability')), $req->input('description'), $req->input('img_path'), (new \DateTime())->format('c'), (new \DateTime())->format('c')]
        );

        return 'ok';
    }

    public function update(Request $req, $id)
    {
        $product = DB::select('select * from products where id = ?', [$id]);

        if (empty($product)) {
            abort(404);
        }

        $product = DB::update(
            'update products set name=?, price=?, availability=?, description=?, img_path=?, updated_at=? where id = ?',
            [$req->input('name'), intval($req->input('price')), intval($req->input('availability')), $req->input('description'), $req->input('img_path'), (new \DateTime())->format('c'), $id]
        );

        return 'ok';
    }

    public function destroy($id)
    {
        $product = DB::delete('delete from products where id = ?', [$id]);
        return 'ok';
    }

}
