<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Input Peminjaman Buku</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
        function validationForm() {
            var judul = document.registration.judul;
            var no = document.registration.no;
            var jenis = document.registration.jenis;
            var datepicker = document.registration.datepicker;

            if (judul_valid(judul)) {
                if (no_valid(no)) {
                     if (jenis_valid(jenis)) {
                        if (datepicker_valid(datepicker)) {
                            return true;
                        }
                    }
                }

            }
            return false;
        }

        function judul_valid(judul) {
            var judul_len = judul.value.length;
            if (judul_len == 0) {
                alert("Judul tidak boleh kosong");
                return false;
            }

            else if (judul_len <= 9) {
                alert("Judul buku minimal 10 karakter");
                return false;
            }

            else {
                judul.focus();
                return true;
            }
        }

        function no_valid(no) {
            var numbers = /^[0-9]+$/;
            var num_len = no.value.length;
            if (num_len == 0) {
                alert("No Buku tidak boleh kosong");
                return false;
            }

            else if (num_len != 5) {
                alert("No Buku harus angka dan 5 digit");
                return false;
            }

            else if (no.value.match(numbers)) {
                no.focus();
                return true;
            }
        }

        function jenis_valid(jenis) {
            if (jenis.selectedIndex < 1) {
                alert("Pilih jenis buku");
                jenis.focus();
                return false;
            }
            else {
                return true;
            }
        }

        function datepicker_valid(datepicker) {
            var datepicker_len = datepicker.value.length;
            if (datepicker_len == 0) {
                alert("Pilih tanggal pengembalian");
                return false;
            }

            else {
                datepicker.focus();
                return true;
            }
        }
    </script>
</head>
<body style="height: max-content; background-size: cover; background-image:url(https://wallup.net/wp-content/uploads/2019/10/884245-sakura-tokyo-spring-flower-peoples-tree-nature-pink.jpg); ">
    <div class="text-black-100"> <!--warnai text-->
        <div class="card-body"></div><!--agar background putih ditengah-->
            <div class="container mt-3">
                <div class="p-5  bg-white rounded"><!--beri background putih-->
                    <div class="col-12"></div><!--span 12(grid system)-->
                        <p>Mas Abdurrachman Hanan</p>
                        <p>Hanan</p>
                        <p>5026201147</p>
                        <br>
                        <div>
                            <h1 class="text-center font-weight-bold">Form Input Peminjaman Buku</h1>
                        </div>
                        <form name="registration" onSubmit="return validationForm();" action="https://www.youtube.com/" method="post">
                            <div class="form-group">
                                <label for="name"><b>Judul Buku:</b></label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>

                            <div class="form-group">
                                <label for="phone"><b>No Buku:</b></label>
                                <input type="tel" class="form-control" id="no" name="no">
                            </div>

                            <div class="form-group">
                                <label for="course"><b>Jenis Peminjaman:</b></label>
                                <select id="jenis" name="jenis" class="form-control">
                                    <option> </option>
                                    <option>Biasa</option>
                                    <option>Kilat</option>
                                    <option>Lama</option>
                                </select>
                            </div>

                            <label for="course"><b>Tanggal Peminjaman:</b></label>
                            <input id="datepicker" name="datepicker" width="276" />
                            <script>
                                $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <br>
                            <div class="button form-group">
                                <button type="submit" class="btn btn-info btn-md">Send</button>
                                <button type="reset" class="btn btn-info bg-danger">Reset</button>
                            </div>
                        </form>
                </div>
            </div>
    </div>
</body>
</html>
