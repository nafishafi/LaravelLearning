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
        // ------- Function with parameter -------

        function print_text($text, $angka){
            $text = "Latihan " . $text . " " . $angka;
            echo "--------";
            echo $text;
            echo "--------";
        }
        print_text("Tes Ngoding", 90);
        
    ?>
</body>
</html>