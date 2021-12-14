<!DOCTYPE html>
<html>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">

    <!-- Google Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400&display=swap" rel="stylesheet">
     <!-- CSS Styling -->
<style>
        body {
            font-family: 'Source Sans 3', sans-serif;
            font-size: 16px;
            font-weight: 300;
            background: whitesmoke;
        }
        header {
            background-image: url('https://image.freepik.com/free-vector/white-background-with-zigzag-pattern-design_1017-33197.jpg')
        }
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            width: 80%;
        }
        .styled-table thead tr {
            background-color: #584292;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #584292;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #584292;
        }
        #navmenu {
            background-color: #ffffff;
            min-height: calc(100vh - 100px);
        }
        footer {
            color: #584292;
            padding-top: 10px;
            padding-bottom: 20px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }
        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }
        li a.active {
            background-color: #dddddd;
            color: black;
        }
        li a:hover:not(.active) {
            background-color: #dddddd;
            color: black;
        }
        #nav {
            background-image: url("https://image.freepik.com/free-vector/banner-with-dark-low-poly-design_1048-13228.jpg");
            color: #ffffff;
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center
        }
        header {
            padding-top: 23px;
            padding-left: 30px;
            padding-bottom: 23px;
            border-bottom: 2px solid #584292;
        }
        #ubah {
            background-color: #f3f3f3;
            padding-top: 40px;
            padding-bottom: 40px;
            margin: 0;
        }
        .btn-green {
            background-color: #584292;
            border-color: #584292;
            border-width: 2px;
            font-weight: bold;
            color: white;
            border-radius: 1;
        }
        .btn-green:hover,
        .btn-green:active,
        .btn-green:focus,
        .btn-green.active {
            background: white;
            color: #584292;
            border-color: #584292;
        }
        .border-3 {
            border-color: #584292 !important;
            border-width: 2px !important;
            background-color: white;
            border-radius: 2;
        }
        }
    </style>

</head>

<body>
   <!-- Isi-->
    <header class="bg-bold text-left">
        <div class="media-body" style="font-size: 20px;">
            <h3 id="nama">Rahbar Uzma Taswirul Afkar</h3>
            <h3 id="nrp">5026201055</h3>
            <img src="https://zedemy.com/wp-content/uploads/avatars/1735/613350f067cf7-bpfull.jpg" alt="" class="img-thumbnail" style="width:85px;">
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-2" id="navmenu">
            <h4 id="nav"><b>Navigation</b></h4>
        <ul>
            <li><a href="/pegawai"><i class="fas fa-user"></i> Pegawai</a></li>
            <li><a href="/absen"><i class="fas fa-calendar-week"></i> Absen</a></li>
            <li><a href="/pendapatan"><i class="fas fa-tasks"></i> Pendapatan</a></li>
            <li><a href="/minggudepan">Minggu Depan</a></li>
            <li><a href="/kertashvs">Praktikum</a></li>
        </ul>
    </div>
    <div class="col-sm-10">

    <h3>@yield('judulhalaman')</h3>
    @section('konten')
    @show
    </div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">Hak Cipta Milik Rahbar Uzma Taswirul Afkar | 5026201055</div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </footer>

   <!-- Optional JavaScript-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

</body>

</html>
