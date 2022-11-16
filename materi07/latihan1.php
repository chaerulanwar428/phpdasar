<?php
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//kepy-nya adalah index, yang dimulai darin0

//membuat array
//cara lama
$hari = array("senin", "selasa" , "rabu");

//cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];
echo"<br>";


//menampilkan array
// var_dump / print_r()
var_dump($hari);
echo "br";
print_r($bulan);

//menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
 
?>

