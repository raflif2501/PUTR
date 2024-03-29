@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Pengajuan SP2D</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('pengajuan.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Program</label>
                                <input type="text" name="program" class="form-control" placeholder="Masukkan Program"
                                    value="{{ old('program') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <input type="text" name="kegiatan" class="form-control" placeholder="Masukkan Kegiatan"
                                    value="{{ old('kegiatan') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan"
                                    value="{{ old('pekerjaan') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Sub Kegiatan</label>
                                <input type="text" name="sub_kegiatan" class="form-control"
                                    placeholder="Masukkan Sub Kegiatan" value="{{ old('sub_kegiatan') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Pelaksana</label>
                                <input type="text" name="pelaksana" class="form-control" placeholder="Masukkan Pelaksana"
                                    value="{{ old('pelaksana') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nilai Pengajuan</label>
                                <input type="text" name="nilai_pengajuan" class="form-control"
                                    placeholder="Masukkan Nominal Pengajuan" value="{{ old('nilai_pengajuan') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Angsuran</label>
                                <input type="number" name="angsuran" class="form-control"
                                    placeholder="Masukkan Jumlah Angsuran" max="4" value="{{ old('angsuran') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Tahun Anggaran</label>
                                <input type="number" name="tahun_anggaran" class="form-control"
                                    placeholder="Masukkan Tahun Anggaran" value="{{ old('tahun_anggaran') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6" style="display: none">
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" value="Pengajuan" class="form-control"
                                placeholder="Pengajuan">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" style="display: none">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Resi</label>
                                <input type="text" name="resi" class="form-control" placeholder="{{ $resi }}"
                                    value="{{ $resi }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" style="display: none">
                                <label>Tanggal Pengajuan</label>
                                <input type="text" name="tanggal_pengajuan" value="{{ $today }}"
                                    class="form-control" placeholder="{{ $today }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukkan Catatan (Boleh dikosongi)"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('pengajuan.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
