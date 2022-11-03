<?php
// pertemuan2
// sintaks php

// standart output
// echo, print => echo "chaerul";
// print_r      => print_r("chaerul");
// var dumb      => var_dumb("chaerul");

// echo "chaerul";
// echo 123;
// echo true;
// echo false;

// penulisan sintaks PHP
// 1. PHP didalam HTML 
// 2. HTML di dalam PHP

//variabel  dan tipe data
//variabel
//tidak boleh diawali dengan angka,tapi boleh mengandung angka
// $nama="chaerul anwar";
// echo "halo, nama saya $nama";

// Operator
// aritmatika
+ - * / %
$x =10;
$y = 20;
echo $x * $y;


?>



<!-- contoh PHP dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo "Chaerul";?></h1>
</body>
</html>


<!-- contoh HTML didalam PHP -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    echo "<h1> Halo, selamat datang chaerul </h1>";
    ?>
</body>
</html> -->