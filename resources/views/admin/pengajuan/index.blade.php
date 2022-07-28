@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATA DALAM PROSES PENGAJUAN</h3>
                        <a href="{{ route('pengajuan.create') }}" type="button" class="btn btn-success"
                            style="float: right">Tambah Data Pengajuan</a>
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
                                        <td>{{ $p->resi }}</td>
                                        <td>{{ $p->program }}</td>
                                        <td>{{ $p->kegiatan }}</td>
                                        <td>{{ $p->sub_kegiatan }}</td>
                                        <td>{{ $p->pekerjaan }}</td>
                                        <td>{{ $p->pelaksana }}</td>
                                        <td>{{ $p->angsuran }}</td>
                                        <td>{{ $p->nilai_pengajuan }}</td>
                                        <td>{{ $p->tahun_anggaran }}</td>
                                        <td>{{ $p->tanggal_pengajuan }}</td>
                                        <td>{{ $p->status }}</td>
                                        <td>{{ $p->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('pengajuan.edit', $p->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <input type="button" class="btn btn-sm btn-danger"
                                                data-id="{{ $p->id }}" onclick="deleteData(this)" value="Delete">
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
    <br><br><br>
    @include('admin.pengajuan.scriptDelete')
@endsection
