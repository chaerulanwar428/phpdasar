<?php
$mahasiswa = [
    ["chaerul anwar", "15200135", "ilmu komputer", "chaerulanwar428@gmail.com"],
    ["joko", "15200133", "ilmu kedokteran", "joko@gmail.com"],
    ["indra", "15200433", "matematika murni", "indra@gmail.com"]
];
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
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
       <li><?= $mhs[0]; ?></li>
       <li><?= $mhs[1]; ?></li>
       <li><?= $mhs[2]; ?></li>
       <li><?= $mhs[3]; ?></li>
    </ul>

<?php endforeach; ?>
</body>
</html>