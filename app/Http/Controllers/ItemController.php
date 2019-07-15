<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ItemRequest;

use App\Item;

use App\Produk;

use Session;

class ItemController extends Controller
{
	public function index()
	{
		$list_produk = Produk::pluck('nama_produk', 'id');
    	$item_list = Item::all();
    	$jumlah_item = Item::count();
    	return view('sadmin/item/index', compact('item_list', 'jumlah_item' ,'list_produk'));
	}

public function index1()
  {
      return view('sadmin/index'

     );
  }


	public function create()
	{
		$list_produk = Produk::pluck('nama_produk', 'id');
		return view('sadmin/item/create', compact('list_produk'));
	}

	public function store(ItemRequest $request)
	{
		Item::create($request->all());
		Session::flash('flash_message', 'Item berhasil ditambahkan.');
		return redirect ('sadmin/item');
	}

	public function destroy(Item $item)
	{
		$item->delete();
		Session::flash('flash_message', 'Data item berhasil dihapus.');
		Session::flash('penting', true);
		return redirect('sadmin/item');
	}

	public function cari(Request $request) {
      $kata_kunci   = trim($request->input('kata_kunci'));
      if(!empty($kata_kunci)) {
        $list_produk  = Produk::pluck('nama_produk', 'id');
        $id_produk    = $request->input('id_produk');
        $query        = Item::where('nama_item', 'LIKE', '%' . $kata_kunci . '%');
        (!empty($id_produk)) ? $query->where('id_produk', $id_produk) : '';
        $item_list    = $query->paginate(10);
        $pagination   = (!empty($id_produk)) ? $pagination = $item_list->appends(['id_produk' => $id_produk]) : '';
        $pagination   = $item_list->appends(['kata_kunci' => $kata_kunci] );
        $jumlah_item  = $item_list->total();
        return view('admins/item/index', compact('item_list', 'kata_kunci', 'pagination', 'jumlah_item', 'list_produk', 'id_produk'));
      }
      else {
          $list_produk  = Produk::pluck('nama_produk', 'id');
          $id_produk    = $request->input('id_produk');
          $query        = Item::where('id_produk', $id_produk);
          $item_list    = $query->paginate(10);
          $pagination   = (!empty($id_produk)) ? $pagination = $item_list->appends(['id_produk' => $id_produk]) : '';
          $jumlah_item  = $item_list->total();
          return view('admins/item/index', compact('item_list', 'pagination', 'jumlah_item', 'list_produk', 'id_produk'));
      }
      return redirect('admins/item');
    }

    public function __construct()
    {
      $this->middleware('auth');
    }	


}
