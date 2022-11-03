<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh kasus tanpa php</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>
    </table>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasus penyelesaian 1 penrapan looping pada website</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++ ){
            echo"<tr>";
            for ($j = 1; $j <= 5; $j++){
                //  echo"<td>1,1</td>";
                echo"<td>$i,$j</td>";
            }
            echo"</tr>";
        }
        ?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasus penyelesaian 2 penerapan looping pada website</title>
    <style>
        .warna-baris{
            background-color:silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
      <?php for ($i = 1; $i <= 5; $i++ ) : ?>
        <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                    <tr>
                <?php endif ?>
        <!-- trik menempatkan HTML hanya untuk html, bukan string php -->
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td> <?= "$i, $j"; ?></td>
        <!-- menyingkatjikaechomenampilkanvariabel ?php echomenjadi ?= -->
            <?php endfor; ?>
            </tr>
            <?php endfor; ?>
</body>
</html>