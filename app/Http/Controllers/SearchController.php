<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Pengecekan;
use App\Models\Verifikasi;
use App\Models\Keuangan;
use RealRashid\SweetAlert\Facades\Alert;

class SearchController extends Controller
{
    public function cari(Request $request)
    {
    $cari = $request->cari;
    $data = Pengajuan::where('resi','like',"%".$cari."%")->get();
    // dd($cari);
    Alert::success('Success', 'Data Ditemukan');
    return view('search',compact('data'));

    }
}
