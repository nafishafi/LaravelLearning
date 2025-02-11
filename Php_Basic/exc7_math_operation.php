<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
        // math method
        // round rand(min, max) max min
        $angka = 1000;
        $angka2 = 3;
        $angka3 = 2.89;

        echo round($angka3); // pembulatan
        echo "<br>Angka hari ini adalah ". rand(5, 10); // angka random 5-10
        echo "<br>Angka hari ini adalah ". max(5, 10); // angka terbesar 5-10
        echo "<br>Angka hari ini adalah ". min($angka, $angka2); // angka terbesar 5-10
    ?>
</body>
</html>