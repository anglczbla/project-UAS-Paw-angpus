<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = Order::all();
        return view('order.index')
                ->with('order', $order);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = menu::all();
        return view('order.create')->with('menu', $menu);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama' => "required",
            'no_telp'=> "required",
            'menu_id' => "required",
            'jumblah' => "required",
            'waktu'=>"required",
            'tanggal'=>"required|date"
        ]);
        
        // Ambil harga dari tabel Menu
        $menu = Menu::find($val['menu_id']);
        $hargaMenu = $menu->harga;
        
        // Hitung total harga
        $totalHarga = $hargaMenu * $val['jumblah'];
        
        // Tambahkan total harga ke data yang akan disimpan
        $val['harga'] = $totalHarga;
        
        // Simpan ke tabel Order
        Order::create($val);
        // radirect ke halaman list 
        return redirect()->route('order.index')->with('success', $val['nama']. 'berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $order)
    {
        // dd($order);
        $order = Order::findOrFail($order);
        // dd($order);
        $menu = Menu::all();
        return view('order.edit', compact('order', 'menu'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order = Order::make($request->all(), [
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'menu_id' => 'required|exists:menus,id',
            'jumlah' => 'required|integer|min:1',
            'waktu' => 'required',
            'tanggal' => 'required|date'
        ]);

        if ($order->fails()) {
            return redirect()->back()->withErrors($order)->withInput();
        }

        $menu = Menu::findOrFail($request->menu_id);

        $order = Order::findOrFail($order);
        $order->nama = $request->nama;
        $order->no_telp = $request->no_telp;
        $order->menu_id = $menu->id;
        $order->jumlah = $request->jumlah;
        $order->harga = $menu->harga * $request->jumlah;

        $order->save();

        return redirect()->route('order.index')->with('success', 'Order berhasil diperbarui.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order)
    {
        $order = Order::findOrFail($order);
        $order->delete();

        return redirect()->route('order.index')->with('success', 'Order berhasil dihapus.');
    }
}
