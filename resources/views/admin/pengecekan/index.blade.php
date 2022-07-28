@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATA DALAM PROSES PENGECEKAN</h3>
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
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Pengecekan</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->pengajuan->resi }}</td>
                                        <td>{{ $p->pengajuan->program }}</td>
                                        <td>{{ $p->pengajuan->kegiatan }}</td>
                                        <td>{{ $p->pengajuan->sub_kegiatan }}</td>
                                        <td>{{ $p->pengajuan->pekerjaan }}</td>
                                        <td>{{ $p->pengajuan->pelaksana }}</td>
                                        <td>{{ $p->pengajuan->angsuran }}</td>
                                        <td>{{ $p->pengajuan->nilai_pengajuan }}</td>
                                        <td>{{ $p->pengajuan->tahun_anggaran }}</td>
                                        <td>{{ $p->pengajuan->tanggal_pengajuan }}</td>
                                        <td>{{ $p->pengajuan->status }}</td>
                                        <td>{{ $p->pengajuan->keterangan }}</td>
                                        <td>{{ $p->tanggal_pengecekan }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('pengecekan.edit', $p->id) }}"
                                                class="btn btn-sm btn-success">Proses Pengajuan
                                            </a>
                                            {{-- <input type="button" class="btn btn-sm btn-danger"
                                                data-id="{{ $p->id }}" onclick="deleteData(this)" value="Delete"> --}}
                                        </td>
                                    </tr>
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
    @include('admin.pengajuan.scriptDelete')
@endsection
