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
        // ------- For Loop -------
        
        // $hewan = ['semut', 'cicak', 'cacing', 'naga'];
        $data = ['nama' => 'hilman', 'umur' => 24, 'sifat' => 'malas'];

        foreach($data as $key => $value){
            echo $key . "<br>";
        }

    ?>
</body>
</html>