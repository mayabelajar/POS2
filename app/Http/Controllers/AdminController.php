<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Produk;
use App\Models\ListPesanan;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
        // $produks = Produk::all();
    }

    public function admin(Request $request) {
        $produks = Produk::all();
        $list_pesanans = ListPesanan::all();

        $kategori = $request->input('kategori');

        if ($kategori) {
            $produks = Produk::where('kategori', $kategori)->get();
        }

        return view('admin.template', compact('produks', 'kategori', 'list_pesanans'));
    }
    
    public function transaksi() {
        return view('admin.transaksi');
    }
    public function meja() {
        return view('admin.meja');
    }

    public function destroy($id)
    {
        //delete post by ID
        Produk::where('id', $id)->delete();

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Dihapus!.',
        ]); 
    }

}