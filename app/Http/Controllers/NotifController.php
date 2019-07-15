<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use Session;
use Storage;

class NotifController extends Controller
{
     public function index()
    {
        $order_list   = Order::orderBy('created_at', 'desc')->paginate(10);
        $jumlah_order = Order::count();
        $list_item    = Item::pluck('nama_item', 'id');
        return view ('sadmin/order/index', compact('order_list', 'jumlah_order', 'list_item'));
    }

    public function show(Order $order)
    {
        return view ('sadmin/order/show', compact('order'));
    }

    public function destroy(Order $order)
    {
        $order->delete();
        Session::flash('flash_message', 'Data Order Berhasil Dihapus.');
        Session::flash('penting', true);
        return redirect('sadmin/order');
    }

    public function cari(Request $request) {
      $kata_kunci   = trim($request->input('kata_kunci'));
      if(!empty($kata_kunci)) {
        $list_item    = Item::pluck('nama_item', 'id');
        $id_item      = $request->input('id_item');
        $query        = Order::where('nama', 'LIKE', '%' . $kata_kunci . '%');
        (!empty($id_item)) ? $query->where('id_item', $id_item) : '';
        $order_list   = $query->paginate(10);
        $pagination   = (!empty($id_item)) ? $pagination = $order_list->appends(['id_item' => $id_item]) : '';
        $pagination   = $order_list->appends(['kata_kunci' => $kata_kunci] );
        $jumlah_order = $order_list->total();
        return view('sadmin/order/index', compact('order_list', 'kata_kunci', 'pagination', 'jumlah_order', 'list_item', 'id_item'));
      }
      else {
          $list_item    = Item::pluck('nama_item', 'id');
          $id_item      = $request->input('id_item');
          $query        = Order::where('id_item', $id_item);
          $order_list   = $query->paginate(10);
          $pagination   = (!empty($id_kelas)) ? $pagination = $order_list->appends(['id_item' => $id_item]) : '';
          $jumlah_order = $order_list->total();
          return view('sadmin/order/index', compact('order_list', 'pagination', 'jumlah_order', 'list_item', 'id_item'));
      }
      return redirect('sadmin/order');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
