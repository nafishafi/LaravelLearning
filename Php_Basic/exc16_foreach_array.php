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
        // for(variabel awal, batas, perubahan)
        
        $hewan = ['semut', 'cicak', 'cacing', 'naga'];
        // for($i = 0; $i < count($hewan); $i++){
        //     echo "-----------";
        //     echo $hewan[$i];
        //     echo "----------- <br>";
        // }

        foreach($hewan as $h){
            echo "-----------";
            echo $h;
            echo "----------- <br>";
        }

    ?>
</body>
</html>