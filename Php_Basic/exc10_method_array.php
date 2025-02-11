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
        // ------- method data array -------
        // array_unique, _reverse, shuffle, count, sort
 
        $angka = [5, 10, 2, 1, 6];
        $kotak = array('kupu', 'kurakura', 'koala', 'kupu');
        $nama = ['Hilman', 'Endy', 'Tiqa'];
        
        // print_r(array_unique($kotak)); // index sama di skip
        // print_r(array_reverse($kotak)); // index dibalik
        // shuffle($kotak);
        // print_r($kotak); // index random

        // echo count($nama) // menghitung isi array

        sort($angka); // mengurutkan nilai sesuai abjad/angka
        print_r($angka);
    ?>
</body>
</html>