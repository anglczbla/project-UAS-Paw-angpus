<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index')->with('menu',$menu);
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data
        $val = $request->validate([
            'kode' => "required|unique:menus",
            'nama' => 'required',
            'harga' => 'required'
        ]);

        menu::create($val);

        return redirect()->route('menu.index')->with('success',$val['kode'], 'Menu berhasil ditambahkan');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);

        return view('menu.edit', compact('menu'));
        
    
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->update($request->only(['kode', 'nama', 'harga']));

        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
    }
}
