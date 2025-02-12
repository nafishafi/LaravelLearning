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
        // ------- WHile & Do While -------
        
        $hewan = ['semut', 'cicak', 'cacing', 'naga'];
        // $data = ['nama' => 'hilman', 'umur' => 24, 'sifat' => 'malas'];

        $i = 5;

        // while($i < count($hewan)){
        //     echo $hewan[$i]."<br>";
        //     $i++;
        // }

        do{
            echo $hewan[$i]. "<br>";
            $i++;
        } while($i < count($hewan));
    ?>
</body>
</html>