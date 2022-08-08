<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Pengajuan;
use App\Models\Pengecekan;
use App\Models\Verifikasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();
        $disetujui = Verifikasi::where('status','=', 'Disetujui')->count();
        $ditolak = Verifikasi::where('status', '=','Ditolak')->count();
        $tidaklengkap = Verifikasi::where('status','=', 'Tidak Lengkap')->count();
        $pengajuan = Pengajuan::count();
        return view('admin.index',compact('disetujui','ditolak','tidaklengkap','pengajuan')) ;
    }
}
