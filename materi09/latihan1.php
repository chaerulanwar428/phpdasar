<?php

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
    <title>Get</title>
</head>
<body>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar<?= $mhs["gambar"]; ?>"><? $mhs["nama"]; ?> </a>
    </li>
    <?php endforeach; ?>
</body>
</html>