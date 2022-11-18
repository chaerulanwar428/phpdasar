<?php
$mahasiswa = ["chaerul anwar", "15200135", "ilmu komputer", "chaerulanwar428@gmail.com"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiwa</h1>
    <ul>
        <?php foreach ( $mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>