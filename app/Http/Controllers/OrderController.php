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
        $cart = Session::get('cart', []);

        if (empty($cart)) {
            abort(404);
        }

        $this->validate($req, [
            'contact' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $ids = implode( ',', array_keys($cart));
        $products = DB::select('select * from products where id in('.$ids.')');

        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $cart[$product->id];
        }

        $order = DB::insert(
          'insert into orders (contact, phone, address, total, user_id) values (?, ?, ?, ?, ?)',
          [$req->input('contact'), $req->input('phone'), $req->input('address'), $total, Session::get('user')->id]
        );

        $orderID = DB::getPdo()->lastInsertId();

        foreach ($products as $product) {
          $ext_price = $product->price * $cart[$product->id];
          DB::insert(
            'insert into order_details (order_id, product_id, quantity, extended_price) values (?, ?, ?, ?)',
            [$orderID, $product->id, $cart[$product->id], $ext_price]
          );
          DB::update(
            'update products set availability = ? where id = ?',
            [($product->availability - $cart[$product->id]), $product->id]
          );
        }


        return redirect()->route('order_show', ['id' => $orderID]);
    }

    public function show($id)
    {
        $order = DB::select('select * from orders o inner join order_details od on o.id=od.order_id inner join products p on p.id=od.product_id where o.id=? and o.user_id=?', [$id, Session::get('user')->id]);
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
        return redirect()->route('order_show', ['id' => $order->id]);
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

        if (empty($cart)) {
            $products = [];
        } else {
            $products = DB::select('select * from products where id in('.$ids.')');
        }

        return view('cart', ['products' => $products, 'cart' => $cart]);
    }

    public function cartEdit(Request $req)
    {
        $cart = Session::get('cart', []);
        $id = $req->input('id');
        $quan = $req->input('quan');

        if (array_key_exists($id, $cart)) {
             if ($quan == 0) {
              unset($cart[$id]);
            } else {
              $cart[$id] = intval($quan);
            }
        } else {
            return 'fail';
        }

        Session::put('cart', $cart);
        return 'ok';
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
            $cart[$id] += intval($quan);
        } else {
            $cart[$id] = intval($quan);
        }

        Session::put('cart', $cart);
        return 'ok';
    }

}
