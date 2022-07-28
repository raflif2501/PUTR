<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pengajuan;
use App\Models\Pengecekan;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class PengecekanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $auth = auth()->user();
        $data = Pengecekan::all();
        // dd($data);
        return view('admin.pengecekan.index', compact('data'));
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
        return view('admin.pengecekan.create', compact('resi','today'));
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
        Pengecekan::create($request->all());
        // dd($request);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('pengecekan.index');
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
         $data = Pengecekan::find($id);
         $today = Carbon::now();
         return view('admin.pengecekan.edit', compact('data','today'));
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
        $data = Pengecekan::find($id);
        $data->update($request->all());
        Alert::success('Success', 'Data Berhasil Diproses');
        return redirect()->route('pengecekan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengeceakan::find($id);
        $data->delete();
    }
}
