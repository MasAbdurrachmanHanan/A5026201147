<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                        <div class="row">
                        <div class="card">
                            Beratbadan : <?php
                            $beratbadan = $_POST["beratbadan"] ;
                            echo $beratbadan ;
                            ?>
                        </div>
                        </div>
                        <div class="row">
                        <div class="card">
                            Tinggibadan : <?php
                            $tinggibadan = $_POST["tinggibadan"] ;
                            echo $tinggibadan ;
                            ?>
                        </div>
                        </div>
                        <div class="row">
                        <div class="card">
                        <?php
                            if ($_POST['submit']) {
                            $beratbadan = $_POST['beratbadan'];
                            $tinggibadan = $_POST['tinggibadan'];
                            function bmi($beratbadan,$tinggibadan) {
                            $bmi = $beratbadan/(($tinggibadan/100)**2);
                            return $bmi;
                            }
                            $bmi = bmi($beratbadan,$tinggibadan);
                            if ($bmi <= 18.5) {
                            $output = "Kurang Berat badan";
                            } else if ($bmi > 18.5 AND $bmi<=22.9 ) {
                            $output = "Normal";
                            } else if ($bmi > 22.9 AND $bmi<=24.9) {
                            $output = "Kelebihan Berat Badan";
                            } else if ($bmi > 24.9 AND $bmi<=29.9) {
                            $output = "Obesitas Tingkat 1";
                            } else if ($bmi > 30) {
                            $output = "Obesitas Tingkat 2";
                            }
                            echo "Nilai BMI kamu adalah " . $bmi . " maka kamu termasuk ";
                            echo "$output";
                            }
                        ?>
                        </div>
                        </div>
                </div>
            </div>
    </div>
</body>
</html>
