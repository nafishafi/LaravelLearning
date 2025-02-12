<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Array PHP</h1>
    <?php
        // ------- Function with return -------
        function menghitung($x, $y){
            $z = $x + $y;
            return $z;
        }
        $hasil = menghitung(2, 5) * 10;
        // echo "Hasil dari penjumlahan ". menghitung (2, 4);
        echo "Hasil dari penjumlahan ". $hasil;
    ?>
</body>
</html>