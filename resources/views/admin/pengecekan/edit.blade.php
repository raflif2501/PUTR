@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Pengecekan SP2D</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('pengecekan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-sm-6" style="display: none">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" value="Pengecekan" class="form-control"
                                    placeholder="Pengecekan">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" style="display: none">
                                <label>Tanggal Pengecekan</label>
                                <input type="text" name="tanggal_pengecekan" value="{{ $today }}"
                                    class="form-control">
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
                        <a href="{{ route('pengecekan.index') }}" class="btn btn-danger">Kembali</a>&ensp;
                        <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
