<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pengajuan;
use App\Models\Pengecekan;
use App\Models\Verifikasi;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin|ppko');
    }
    public function index()
    {
        $auth = auth()->user();
        $data = Pengajuan::all();
        return view('admin.pengajuan.index', compact('data'));
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
        $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
        if($request->keterangan != null)
        {
            Pengajuan::create([
                'id' => $id,
                'resi' => $request->resi,
                'program' => $request->program,
                'kegiatan' => $request->kegiatan,
                'sub_kegiatan' => $request->sub_kegiatan,
                'pekerjaan' => $request->pekerjaan,
                'pelaksana' => $request->pelaksana,
                'angsuran' => $request->angsuran,
                'nilai_pengajuan' => $request->nilai_pengajuan,
                'tahun_anggaran' => $request->tahun_anggaran,
                'tanggal_pengajuan' => $request->tanggal_pengajuan,
                'status' => $request->status,
                'keterangan' => $request->keterangan
            ]);
        }else{
            Pengajuan::create([
            'id' => $id,
            'resi' => $request->resi,
            'program' => $request->program,
            'kegiatan' => $request->kegiatan,
            'sub_kegiatan' => $request->sub_kegiatan,
            'pekerjaan' => $request->pekerjaan,
            'pelaksana' => $request->pelaksana,
            'angsuran' => $request->angsuran,
            'nilai_pengajuan' => $request->nilai_pengajuan,
            'tahun_anggaran' => $request->tahun_anggaran,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'status' => $request->status
            ]);
        }
        Pengecekan::create([
            'id' => $id,
            'pengajuan_id' => $id,
            'status' => '',
        ]);
        Verifikasi::create([
            'pengajuan_id' => $id,
            'pengecekan_id' => $id,
            'status' => '',
        ]);
        // dd($request);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('pengajuan.index');
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
         $data = Pengajuan::find($id);
         return view('admin.pengajuan.edit', compact('data'));
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
        $data = Pengajuan::find($id);
        $data->update($request->all());
        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect()->route('pengajuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data2 = Verifikasi::find($id);
        $data = Pengajuan::find($id);
        $data1 = Pengecekan::find($id);
        $data2 = Verifikasi::where('id',$id)->first();
        // dd($data2);
        if ($data2 != null) {
            $data2->delete();
            if ($data1 != null) {
                $data1->delete();
                if ($data != null) {
                    $data->delete();
                    Alert::success('Success', 'Data Berhasil Dihapus');
                    return back();
                }
            }
        }
    }
}
