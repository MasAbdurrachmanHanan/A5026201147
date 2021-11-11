<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kalkulator BMI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        }
    </style>
</head>
<body style="height: max-content; background-image:url(https://wallup.net/wp-content/uploads/2019/10/884245-sakura-tokyo-spring-flower-peoples-tree-nature-pink.jpg); background-size: cover;">
    <div class="text-black-100"> <!--warnai text-->
        <div class="card-body"></div><!--agar background putih ditengah-->
            <div class="container mt-3">
                <div class="p-5 mb-2 bg-white rounded"><!--beri background putih-->
                    <div class="col-12"></div><!--span 12(grid system)-->
                        <div>
                            <h1 class="text-center font-weight-bold">Kalkulator BMI</h1>
                            <p class="text-center"> Body Mass Index (BMI) atau Indeks Massa Tubuh (IMT) adalah angka yang menjadi penilaian standar untuk menentukan apakah berat badan Anda tergolong normal, kurang, berlebih, atau obesitas.</p>
                            <p class="text-center"> Indeks Massa Tubuh (IMT) adalah salah satu cara untuk mengetahui rentang berat badan ideal Anda dan memprediksi seberapa besar risiko gangguan kesehatan Anda. Metode ini digunakan untuk menentukan berat badan yang sehat berdasarkan berat dan tinggi badan.</p>
                        </div>
                            <img src="https://www.gendhismanis.id/cni-content/uploads/modules/bmi/20200408114538.png">
                            <br>
                            <div class="d-flex flex-row justify-content-center">
                                <br>
                            </div>

                            <form name="calculator">
                                <table class="tabel">
                                 <tr>
                                  <td>Masukkan berat badan anda dalam (KG)</td><td>:</td><td><input type="number" name="angka1"></td>
                                 </tr>
                                 <tr>
                                  <td>Masukkan tinggi badan and (CM)</td><td>:</td><td><input type="number" name="angka2"></td>
                                 </tr>
                                 <tr>
                                  <td>Hasil</td><td>:</td><td><input type="number" name="hasil"></td>
                                 </tr>
                                 <tr>
                                  <td colspan="3" align="center">
                                   <input class="tombol" type="button" onclick="bagi()" value="  Hitung!  ">
                                  </td>
                                 </tr>
                                </table>
                            </form>

                            <script>
                                function bagi(){
                                    var angka1=parseFloat(document.calculator.angka1.value);
                                    var angka2=parseFloat(document.calculator.angka2.value);
                                    var hasil= angka1/((angka2/100)**2);
                                    document.calculator.hasil.value=hasil;
                                }
                            </script>
                </div>
            </div>
        </div>
</body>
</html>
