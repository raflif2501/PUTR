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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/pemkab.png">

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
                            <a class="tab-list__link" href="/#tab1" data-toggle="tab">Cek Resi</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form method="GET" action="/cari">
                                <div class="input-group">
                                    <label class="label">Resi</label>
                                    <input type="text" name="cari" placeholder="Masukkan Resi"
                                        required="required">
                                    <i class="zmdi zmdi-key input-group-symbol"></i>
                                </div>
                                {{-- <div class="input-group">
                                    <label class="label">Token</label>
                                    <input type="text" name="address" placeholder="Masukkan Token"
                                        required="required">
                                    <i class="zmdi zmdi-key input-group-symbol"></i>
                                </div> --}}
                                <button class="btn-submit m-t-20" type="submit">Cek Resi</button>
                            </form>
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
