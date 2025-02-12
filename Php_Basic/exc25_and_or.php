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
        // ------- && || -------
        $uang_programmer = 1000;
        $keyboard = 2000;
        $uang_designer = 4000;

        if($uang_programmer > $keyboard || $uang_designer > $keyboard){
            echo 'boleh beli keyboard';
        } else {
            echo 'ngga bisa beli';
        }
        
    ?>
</body>
</html>