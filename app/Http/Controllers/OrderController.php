<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller {

    public function index()
    {
        $orders = DB::select('select * from orders where user_id = ?', [Session::get('user')->id]);
        return view('orders', ['orders' => $orders]);
    }

    public function create(Request $req)
    {
        return redirect()->route('order_show', ['id' => $id]);
    }

    public function show($id)
    {
        $order = DB::select('select * from orders where id = ? and user_id = ?', [$id, Session::get('user')->id]);
        return view('order', ['order' => $order]);
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'contact' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $order = DB::update(
            'update orders set contact = ?, phone = ?, address = ? where id = ? and user_id = ?',
            [$req->input('contact'), $req->input('phone'), $req->input('address'), $id, Session::get('user')->id]
        );
        return redirect()->route('order_show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $order = DB::delete('delete from orders where id = ? and user_id = ?', [$id, Session::get('user')->id]);
        return redirect()->route('order_index');
    }

    public function cartReview()
    {
        $cart = Session::get('cart', []);
        $ids = implode( ',', array_keys($cart));
		$products = DB::select('select * from products where id in('.$ids.')');
        return view('cart', ['products' => $products, 'cart' => $cart]);
    }

    public function cartAdd(Request $req)
    {
        $cart = Session::get('cart', []);
        $id = $req->input('id');
        $quan = $req->input('quan');

        if (empty(DB::select('select * from products where id=?',[$id]))) {
            abort(404);
        }

        if (array_key_exists($id, $cart)) {
            $cart[$id] += 1;
        } else {
            $cart[$id] = 1;
        }

        Session::put('cart', $cart);
        return 'ok';
    }

}
