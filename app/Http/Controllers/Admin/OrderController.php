<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller {

    public function index()
    {
        $orders = DB::select('select * from orders');
        return view('admin.orders', ['orders' => $orders]);
    }

    public function show($id)
    {
        $order = DB::select('select * from orders o inner join order_details od on o.id=od.order_id where o.id=?', [$id]);
        return view('admin.order', ['order' => $order]);
    }

    public function update(Request $req, $id)
    {
        $order = DB::select('select * from orders where id = ?', [$id]);

        if (empty($order)) {
            abort(404);
        }

        $order = DB::update(
            'update orders set contact = ?, phone = ?, address = ? where id = ?',
            [$req->input('contact'), $req->input('phone'), $req->input('address'), $id]
        );

        return 'ok';
    }

    public function destroy($id)
    {
        $order = DB::delete('delete from orders where id = ?', [$id]);
        return 'ok';
    }

}
