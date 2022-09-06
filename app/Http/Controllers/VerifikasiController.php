<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pengajuan;
use App\Models\Pengecekan;
use App\Models\Verifikasi;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin|verificator');
    }
    public function index()
    {
        $auth = auth()->user();
        $data = Verifikasi::all();
        // $cek = Verifikasi::select("pengecekan_id")->get();
        // dd($data);
        return view('admin.verifikasi.index', compact('data'));
    }
    public function rekap()
    {
        $data = Verifikasi::all();
        // dd($data);
        return view('admin.verifikasi.rekap', compact('data'));
    }
    public function disetujui()
    {
        $data = Verifikasi::select("*")->where("status","=","Disetujui")->get();
        // dd($data);
        return view('admin.verifikasi.disetujui', compact('data'));
    }
    public function ditolak()
    {
        $data = Verifikasi::select("*")->where("status","=","Ditolak")->get();
        // dd($data);
        return view('admin.verifikasi.ditolak', compact('data'));
    }
    public function tidaklengkap()
    {
        $data = Verifikasi::select("*")->where("status","=","Tidak Lengkap")->get();
        // dd($data);
        return view('admin.verifikasi.tidaklengkap', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Verifikasi::find($id);
        $today = Carbon::now();
        return view('admin.verifikasi.edit', compact('data','today'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Verifikasi::find($id);
        $data->update($request->all());
        Alert::success('Success', 'Data Berhasil Diverifikasi');
        return redirect()->route('verifikasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
