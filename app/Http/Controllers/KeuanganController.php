<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pengajuan;
use App\Models\Keuangan;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin|keuangan');
    }
    public function index()
    {
        $auth = auth()->user();
        $data = Keuangan::all();
        // dd($data);
        return view('admin.keuangan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resi = Str::random(12);
        $today = Carbon::now();
        return view('admin.pengajuan.create', compact('resi','today'));
        // dd($resi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Keuangan::create($request->all());
        // dd($request);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('keuangan.index');
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
        $data = Keuangan::find($id);
        $today = Carbon::now();
        return view('admin.keuangan.edit', compact('data','today'));
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
        $data = Keuangan::find($id);
        $data->update($request->all());
        Alert::success('Success', 'Data Berhasil Diproses');
        return redirect()->route('keuangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Keuangan::find($id);
        $data->delete();
    }

    public function rekap()
    {
        $data = Keuangan::all();
        // dd($data);
        return view('admin.keuangan.rekap', compact('data'));
    }
    public function disetujui()
    {
        $data = Keuangan::select("*")->where("status","=","Disetujui")->get();
        // dd($data);
        return view('admin.keuangan.disetujui', compact('data'));
    }
    public function ditolak()
    {
        $data = Keuangan::select("*")->where("status","=","Ditolak")->get();
        // dd($data);
        return view('admin.keuangan.ditolak', compact('data'));
    }
    public function pengajuankeuangan()
    {
        $data = Keuangan::select("*")->where("status","=","Pengajuan Keuangan")->get();
        // dd($data);
        return view('admin.keuangan.pengajuankeuangan', compact('data'));
    }
}
