<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

</head>

<body>
    <div class="container">
        <header class="sm text-center">
            <div class="col sm-6" style= "margin-top :20px">
                <img src="{{ URL::asset('/images/fotoprofil.jpg') }}" width="150px" height="180px" style="margin-top: 30px" >
                <br>
                <h1>Mas Abdurrachman Hanan</h1>
                <h2>5026201147</h2>
            </div>
        </header>

        <div class="row">
            <div class="col-sm-6 text-center"  style="background-color: rgb(57, 107, 180); margin-top :20px"  >
                <br>
                <h4>Tabel data</h4>
                  <nav aria-label="breadcrumb" style="margin-top : 40px">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/pegawai">Pegawai</a></li> <br>
                      <li class="breadcrumb-item"><a href="/absen">Absen</a></li> <br>
                      <li class="breadcrumb-item"><a href="/pendapatan">Pendapatan</a></li> <br>
                      <li class="breadcrumb-item"><a href="/penggaris">Praktikum</a></li> <br>
                      <li class="breadcrumb-item"><a href="/karyawan1">EAS</a></li> <br>
                    </ol>
                  </nav>
            </div>
            <div class="col-sm-6 text-center"  style=" margin-top :20px ; paddin-left : 5px" >
                <div>
                    <div>
            <h3>@yield('judulhalaman')</h3>

            @section('konten')

            @show
                    </div>
                </div>
            </div>
        </div>
        <footer class = "text-center">
            <h4>Hak cipta Oleh 5026201147 - Mas Abdurrachman Hanan </h4>
        </footer>

    </div>

</div>
</body>

</html>
