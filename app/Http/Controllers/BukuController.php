<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

class BukuController extends Controller
{
    public function show($id)
    {
        $bukukas = buku::find($id);
        return view('home', compact('bukukas'));
    }
=======

class BukuController extends Controller
{
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
    public function bukukas(Request $request)
    {
        if ($request->has('cari')) {
            $bukukas = buku::where('nama_buku', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $bukukas = buku::paginate(5);
        }
<<<<<<< HEAD
        return view('transaction.kas', compact('bukukas'));
=======
        return view('home.home', compact('bukukas'));
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
    }

    // controller menampilkan data & mencari data
    public function showData(Request $request)
    {
        if ($request->has('cari')) {
            $bukukas = buku::where('nama_buku', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $bukukas = buku::paginate(5);
        }
<<<<<<< HEAD
        return view('index', compact('bukukas'));
=======
        return view('transaction.kas', compact('bukukas'));
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
    }

    public function insertData(Request $request)
    {
<<<<<<< HEAD
        buku::create([
            "nama_buku" => $request->nama_buku,
            "user_id" => Auth::user()->id
        ]);
        return redirect()->route('home')->with('success', 'Input data berhasil');
    }

   
=======
        buku::create($request->all());
        return redirect()->route('transaction.kas')->with('success', 'Input data berhasil');
    }
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
}
