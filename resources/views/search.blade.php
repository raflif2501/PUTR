<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>Cek Resi | PUTR</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">

    <!-- Icons font CSS-->
    <link href="{{ asset('search') }}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet"
        media="all">
    <link href="{{ asset('search') }}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="{{ asset('search') }}/https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('search') }}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('search') }}/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('search') }}/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-img-1 p-t-165 p-b-100">
        <div class="wrapper wrapper--w720">
            <div class="card card-3">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active"">
                            <a class="tab-list__link" href="/#tab1" data-toggle="tab">Data</a>
                        </li>
                        <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab2" data-toggle="tab">Status</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            @php
                                function str($rupiah)
                                {
                                    $rp = 'Rp ' . number_format($rupiah, 2, ',', '.');
                                    return $rp;
                                }
                            @endphp
                            @foreach ($data as $p)
                                <div class="input-group">
                                    <label class="label">Program</label>
                                    <h5 disabled>{{ $p->program }}</h5>
                                    <i class="zmdi zmdi-wrench input-group-symbol"></i>
                                </div>
                                <div class="input-group">
                                    <label class="label">Kegiatan</label>
                                    <h5 disabled>{{ $p->kegiatan }}</h5>
                                    <i class="zmdi zmdi-collection-text input-group-symbol"></i>
                                </div>
                                <div class="input-group">
                                    <label class="label">Pelaksana</label>
                                    <h5 disabled>{{ $p->pelaksana }}</h5>
                                    <i class="zmdi zmdi-account input-group-symbol"></i>
                                </div>
                                <div class="input-group">
                                    <label class="label">Nominal</label>
                                    <h5 disabled>{{ str($p->nilai_pengajuan) }}</h5>
                                    <i class="zmdi zmdi-money input-group-symbol"></i>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane" id="tab2">
                            @foreach ($data as $p)
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Pengajuan oleh PPKo</label>
                                            @if ($p->status != null)
                                                <h5 disabled>Selesai</h5>
                                                <i class="zmdi zmdi-check input-group-symbol"></i>
                                            @else
                                                <h5 disabled>Belum</h5>
                                                <i class="zmdi zmdi-spinner input-group-symbol"></i>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Pengecekan oleh PPTK</label>
                                            @if ($p->pengecekan->status != null)
                                                <h5 disabled>Selesai</h5>
                                                <i class="zmdi zmdi-check input-group-symbol"></i>
                                            @else
                                                <h5 disabled>Belum</h5>
                                                <i class="zmdi zmdi-spinner input-group-symbol"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label class="label">Verifikasi Oleh Verifikator</label>
                                    @if ($p->verifikasi->status == 'Disetujui')
                                        <h5 disabled>{{ $p->verifikasi->status }}</h5>
                                        <i class="zmdi zmdi-check input-group-symbol"></i>
                                    @elseif ($p->verifikasi->status == 'Ditolak')
                                        <h5 disabled>{{ $p->verifikasi->status }}</h5>
                                        <i class="zmdi zmdi-close input-group-symbol"></i>
                                    @elseif ($p->verifikasi->status == 'Tidak Lengkap')
                                        <h5 disabled>{{ $p->verifikasi->status }}</h5>
                                        <i class="zmdi zmdi-assignment-alert input-group-symbol"></i>
                                    @else
                                        <h5 disabled>Belum Diverifikasi</h5>
                                        <i class="zmdi zmdi-spinner input-group-symbol"></i>
                                    @endif
                                </div>
                                @if ($p->verifikasi->keterangan != null)
                                    <div class="input-group">
                                        <label class="label">Keterangan dari Verifikator</label>
                                        <h5 disabled>{{ $p->verifikasi->keterangan }}</h5>
                                        <i class="zmdi zmdi-assignment-alert input-group-symbol"></i>
                                    </div>
                                @endif
                                <div class="input-group">
                                    <label class="label">Pengajuan Keuangan oleh Bendahara</label>
                                    @if ($p->keuangan->status == 'Disetujui')
                                        <h5 disabled>{{ $p->keuangan->status }}</h5>
                                        <i class="zmdi zmdi-check input-group-symbol"></i>
                                    @elseif ($p->keuangan->status == 'Ditolak')
                                        <h5 disabled>{{ $p->keuangan->status }}</h5>
                                        <i class="zmdi zmdi-close input-group-symbol"></i>
                                    @elseif ($p->keuangan->status == 'Pengajuan Keuangan')
                                        <h5 disabled>{{ $p->keuangan->status }}</h5>
                                        <i class="zmdi zmdi-assignment-alert input-group-symbol"></i>
                                    @else
                                        <h5 disabled>Belum Pengajuan Keuangan</h5>
                                        <i class="zmdi zmdi-spinner input-group-symbol"></i>
                                    @endif
                                </div>
                                @if ($p->keuangan->keterangan != null)
                                    <div class="input-group">
                                        <label class="label">Keterangan dari Bendahara</label>
                                        <h5 disabled>{{ $p->keuangan->keterangan }}</h5>
                                        <i class="zmdi zmdi-assignment-alert input-group-symbol"></i>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('search') }}/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('search') }}/vendor/select2/select2.min.js"></script>
    <script src="{{ asset('search') }}/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{ asset('search') }}/vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="{{ asset('search') }}/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="{{ asset('search') }}/vendor/datepicker/moment.min.js"></script>
    <script src="{{ asset('search') }}/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{ asset('search') }}/js/global.js"></script>

</body>

</html>
