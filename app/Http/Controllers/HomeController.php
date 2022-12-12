<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Pengajuan;
use App\Models\Pengecekan;
use App\Models\Verifikasi;
use App\Models\Keuangan;

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
        $disetujui = Keuangan::where('status','=', 'Disetujui')->count();
        $ditolak = Keuangan::where('status', '=','Ditolak')->count();
        $pengajuankeuangan = Keuangan::where('status','=', 'Pengajuan Keuangan')->count();
        $pengajuan = Pengajuan::count();
        return view('admin.index',compact('disetujui','ditolak','pengajuankeuangan','pengajuan')) ;
    }
}
