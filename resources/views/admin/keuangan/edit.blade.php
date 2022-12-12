@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Keuangan SP2D</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('keuangan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status Keuangan</label>
                                <select name="status" class="form-control">
                                    <option value="Pengajuan Keuangan">Pengajuan Keuangan</option>
                                    <option value="Ditolak">Ditolak</option>
                                    <option value="Disetujui">Disetujui</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukkan Catatan (Boleh dikosongi)"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group" style="display: none">
                            <label>Tanggal Keuangan</label>
                            <input type="text" name="tanggal_keuangan" value="{{ $today }}" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer" style="float: right">
                        <a href="{{ route('keuangan.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <br><br><br>
@endsection
