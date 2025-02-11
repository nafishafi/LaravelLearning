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
        // ------- Associative Array -------
        // key => isi
        $data = array("nama" => "hilman","umur" => 21, "kerja" => "pengacara");

        // print_r($data);

        // Ubah value
        $data['nama'] = "Hilman Ramadhan";
        echo "Namanya adalah " . $data['nama'];

    ?>
</body>
</html>