<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view('view',compact('menus'));
    }

    public function new(){
        return view('new');
    }

    public function save(Request $request){
        $nama = $request->input('nama');
        $harga = $request->input('harga');
        $deskripsi = $request->input('deskripsi');
        $menu = new menu;
        $menu->nama = $nama;
        $menu->harga = $harga;
        $menu->deskripsi = $deskripsi;
        $menu->save();
        return redirect(route('MenuIndex'));
        // Menu::insert('insert into menus (id, nama, harga, deskripsi) values (?, ?, ?, ?)', ['', '$nama','$harga','$deskripsi']);
        // Menu
    }

    public function delete(int $id){
        $allMenu = Menu::find($id);
        $allMenu->delete();
        return redirect(route('MenuIndex'));
    }

    public function update(Request $request,int $id){
        $allMenu = Menu::findOrFail($id);
        $allMenu->nama = $request->input('nama');
        $allMenu->harga = $request->input('harga');
        $allMenu->deskripsi = $request->input('deskripsi');
        $allMenu->save();
        return redirect(route('MenuIndex'));
    }

    public function edit(int $id){
        $menu = Menu::find($id);
        return view('update',compact('menu'));
    }

}
