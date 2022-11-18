<?php
//array associative
//definisinya sama seperti array numerik, kecualo
//key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "chaerul anwar",
        "nim" => "15200135",
        "email" => "chaerulanwar428@gmail.com",
        "jurusan" => "ilmu komputer",
        "gambar" => "img1.jpg"
    ],
    [
        "nama" => "joko",
        "nim" => "123456",
        "email" => "joko@gmail.com",
        "jurusan" => "ilmu kedokteran",
        "gambar" => "img2.jpg"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>" ></li>
            <li> Nama : <?= $mhs ["nama"]; ?></li>
            <li>nim : <?= $mhs ["nim"]; ?> </li>
            <li>jurusan : <?= $mhs ["jurusan"]; ?> </li>
            <li>email : <?= $mhs ["email"]; ?> </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>