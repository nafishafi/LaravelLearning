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
        // ------- Scope -------
        $a = 20000;
        $b = 3;
        
        function menghitung(){
            global $a, $b; // mengakse diluar scope
            
            // $c = $GLOBALS['a'] + $GLOBALS['b']; // ALTERNATIF
            $c = $a + $b;
            return $c;
        }
        echo menghitung();
        
    ?>
</body>
</html>