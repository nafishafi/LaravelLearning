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
        // ------- Method Associative Array -------
        // array_values array_keys array_merge

        $data = array("nama" => "hilman","umur" => 21, "kerja" => "pengacara");
        $data2 = array("istri" => "belum ada","laptop" => "Lenovo");

        //print_r(array_values($data)); // mengambil value saja
        //print_r(array_keys($data)); // mengambil keys saja
        print_r(array_merge($data, $data2));

    ?>
</body>
</html>