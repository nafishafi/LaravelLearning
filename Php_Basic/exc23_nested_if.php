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
        // ------- If and else -------
        // operator logika == === > >= < <= !=
        // === -> tidak hanya 3 sama dengan tetapi type data nya juga
        $uang_programmer = 1000;
        $keyboard = 2000;
        $uang_designer = 4000;

        if($uang_programmer > $keyboard){
            echo 'dibeli';
        }else if($uang_designer > $keyboard){
            echo 'dibeli oleh designer';
            if($uang_designer >= $keyboard * 2){
                echo 'dibeli dua kali oleh designer!';
            }
        }else{
            echo 'ngga cukup';
        }

    ?>
</body>
</html>