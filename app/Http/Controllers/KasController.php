<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use  PDF;
use Carbon\Carbon;
use App\Models\Kas;
use App\Models\buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
=======
use App\Models\Kas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF as PDF;
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db

class KasController extends Controller
{
    // controller menampilkan halaman home
    public function home()
    {
<<<<<<< HEAD
        $buku = buku::where('user_id', Auth::user()->id)->paginate(5);
        return view('home', compact('buku'));
    }

    public function aboutUs()
    {
        return view('about-us');
    }


    public function exportfilter($buku_id, Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        $buku = Kas::where('buku_id', $buku_id)->whereBetween('tanggal', [$awal, $akhir])->get();
        view()->share('buku', $buku);
        $pdffilter = PDF::loadview('kas-pdf', compact('buku'));
        return $pdffilter->download('kas-filter.pdf');
=======
        return view('home.home');
    }

    // controller menampilkan halaman tabel transaksi
    public function kas(Request $request)
    {
        if ($request->has('cari')) {
            $kaskita = Kas::where('transaksi', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $kaskita = Kas::paginate(5);
        }
        return view('transaction.kas', compact('kaskita'));
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
    }

    // controller menampilkan data & mencari data
    public function showkas(Request $request)
    {
        if ($request->has('cari')) {
            $kaskita = Kas::where('transaksi', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $kaskita = Kas::paginate(5);
        }
<<<<<<< HEAD
        return view('home', compact('kaskita'));
    }

    // controller menginput data
    public function insertDatakas(Request $request, $buku_id)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'transaksi' => 'required',
            'pemasukan' => '',
            'pengeluaran' => '',
            'buku_id' => '',
        ]);
        Kas::create([
            "tanggal" => $request->tanggal,
            "transaksi" => $request->transaksi,
            "pemasukan" => $request->pemasukan,
            "pengeluaran" => $request->pengeluaran,
            "buku_id" => $buku_id,
        ]);
        return redirect()->route('transaction.kas', ["buku_id" => $buku_id])->with('success', 'Input data berhasil');
    }

    public function export($buku_id)
    {

        $buku = Kas::all()->where('buku_id', $buku_id);
        view()->share('buku', $buku);
        $pdf = PDF::loadview('kas-pdf', compact('buku'));
        return $pdf->download('kas.pdf');
    }

    public function deletebook($id)
    {
        $delete = buku::find($id);
        $delete->delete();
        return redirect('/home');
    }

    public function kas(Request $request, $buku_id)
    {

        $buku = buku::find($buku_id);
        $tanggal_awal = $request->tanggal_awal;
        $tanggal_akhir = $request->tanggal_akhir;
        if ($buku_id) {
            if ($tanggal_awal and $tanggal_akhir) {
                $kaskita = Kas::where('buku_id', $buku_id)->whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])->get();
            } elseif ($request->has('search')) {
                $kaskita = Kas::where([
                    ['buku_id', $buku_id],
                    ['transaksi', 'LIKE', '%' . $request->search . '%']
                ])->get();
            } else {
                $kaskita = Kas::where('buku_id', $buku_id)->get();
            }
        }

        return view('transaction.kas', compact('kaskita', 'buku_id', 'buku'));
    }

    public function showData($id)
    {
        $kaskita = Kas::find($id);
        return view('transaction.more-info', compact('kaskita'));
    }
=======
        return view('transaction.home', compact('kaskita'));
    }

    // controller menginput data
    public function insertDatakas(Request $request)
    {
        Kas::create($request->all());
        return redirect()->route('transaction.kas')->with('success', 'Input data berhasil');
    }

    // cotroller menampilkan data 
    // public function show($id)
    // {
    //     $kas = Kas::find($id);
    //     return view('update', compact('kas'));
    // }

    // controller 
    // public function update(Request $request, $id)
    // {
    //     $kas = Kas::find($id);
    //     $kas->update($request->all());
    //     return redirect()->route('info')->with('success', 'data sudah diubah');
    // }

    // public function destroy($id)
    // {
    //     $kas = Kas::find($id);
    //     $kas->delete();
    //     return redirect()->route('info')->with('success', 'data sudah hapus');
    // }

    public function export()
    {
        $kas = Kas::all();
        view()->share('data', $kas);
        $pdf = PDF::loadview('kas-pdf');
        return $pdf->download('kas.pdf');
    }
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
}
