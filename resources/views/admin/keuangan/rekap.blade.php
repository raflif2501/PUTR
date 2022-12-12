@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATA DISETUJUI</h3>
                        {{-- <a href="{{ route('pengajuan.create') }}" type="button" class="btn btn-success"
                            style="float: right">Tambah Data Pengajuan</a> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Resi</th>
                                    <th>Program</th>
                                    <th>Kegiatan</th>
                                    <th>Sub Kegiatan</th>
                                    <th>Pekerjaan</th>
                                    <th>Pelaksana</th>
                                    <th>Angsuran</th>
                                    <th>Nilai Pengajuan</th>
                                    <th>Tahun Anggaran</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status </th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Pengecekan</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Verifikasi</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                    function str($rupiah)
                                    {
                                        $rp = 'Rp ' . number_format($rupiah, 2, ',', '.');
                                        return $rp;
                                    }
                                @endphp
                                @foreach ($data as $p)
                                    @if ($p->status != null)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->pengajuan->resi }}</td>
                                            <td>{{ $p->pengajuan->program }}</td>
                                            <td>{{ $p->pengajuan->kegiatan }}</td>
                                            <td>{{ $p->pengajuan->sub_kegiatan }}</td>
                                            <td>{{ $p->pengajuan->pekerjaan }}</td>
                                            <td>{{ $p->pengajuan->pelaksana }}</td>
                                            <td>{{ $p->pengajuan->angsuran }}</td>
                                            <td>{{ str($p->pengajuan->nilai_pengajuan) }}</td>
                                            <td>{{ $p->pengajuan->tahun_anggaran }}</td>
                                            <td>{{ $p->pengajuan->tanggal_pengajuan }}</td>
                                            <td>{{ $p->pengajuan->status }}</td>
                                            <td>{{ $p->pengajuan->keterangan }}</td>
                                            <td>{{ $p->pengecekan->tanggal_pengecekan }}</td>
                                            <td>{{ $p->pengecekan->status }}</td>
                                            <td>{{ $p->pengecekan->keterangan }}</td>
                                            <td>{{ $p->tanggal_verifikasi }}</td>
                                            <td>{{ $p->status }}</td>
                                            <td>{{ $p->keterangan }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
